tinymce.init({
    selector: "#content-input",
    plugins: 'image link media',
    automatic_uploads: true,
    relative_urls: false,
    license_key: "gpl",
    images_upload_handler: (blobInfo, progress) => new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '/events/store_image');
        xhr.withCredentials = true;
        xhr.upload.onprogress = (e) => {
            progress(e.loaded / e.total * 100);
        };
        xhr.onload = () => {
            if (xhr.status === 403) {
                reject({ message: 'HTTP Error: ' + xhr.status, remove: true });
                return;
            }
            if (xhr.status < 200 || xhr.status >= 300) {
                reject('HTTP Error: ' + xhr.status);
                return;
            }
            let json;
            try {
                json = JSON.parse(xhr.responseText);
            } catch (e) {
                reject('Invalid JSON: ' + xhr.responseText);
                return;
            }
            if (!json || typeof json.location !== 'string') {
                reject('Invalid JSON: ' + xhr.responseText);
                return;
            }
            resolve(json.location);
        };
        xhr.onerror = () => {
            reject('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
        };
        const formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
        xhr.send(formData);
    }),
    content_style: "img{max-width:100%; height:auto}"
});
