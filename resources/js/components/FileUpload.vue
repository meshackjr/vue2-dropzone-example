<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <vue-dropzone v-on:vdropzone-removed-file="imageRemoved"
                                      v-on:vdropzone-mounted="dropzoneMounted"
                                      v-on:vdropzone-success="uploadSuccess" ref="myVueDropzone" id="dropzone"
                                      :options="dropzoneOptions"></vue-dropzone>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'FileUpload',

        data: function () {
            return {
                token: document.head.querySelector('meta[name="csrf-token"]').content,
                dropzoneOptions: {
                    url: '/upload',
                    thumbnailWidth: 150,
                    maxFiles: 10,
                    addRemoveLinks: true,
                    // maxFilesize: 0.5,
                    dictDefaultMessage: "<i class='fas fa-2x fa-file-upload'></i><br><p>Click or Drop Images to Upload</p>",
                    headers: {'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content}
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            dropzoneMounted() {
                console.log('Dropzone Mounted');
            },
            imageRemoved(file, error, xhr) {
                axios.post('/upload/remove', {
                    filename: file.filename
                }).then((response) => {
                    console.log(response);
                }).catch((error) => {
                    console.log(error);
                })
            },
            uploadSuccess(file, response) {
                console.log('File Successfully Uploaded with file name: ' + response.name);
                file.filename = response.name;
            },
        }
    }
</script>
