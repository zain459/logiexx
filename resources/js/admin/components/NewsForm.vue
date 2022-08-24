<template>
    <div class="card">
        <div class="card-header fw-bold">Create News</div>
        <div class="card-body twocolumns-form">
            <form @submit.prevent="onSubmit" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" v-model="formData.title" placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Posted Date<sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" v-model="formData.postedDate" required/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">link<sup>*</sup></label>
                    <div class="col-md-4">
                        <input type="url" class="form-control" v-model="formData.link"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Short Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="form-control" v-model="formData.shortDescription" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Long Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <vue-editor v-model="formData.longDescription" required></vue-editor>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" accept="image/png, image/jpeg" @change="onChange">

                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</template>

<script>
import {VueEditor} from "vue2-editor";
import PictureInput from 'vue-picture-input'

export default {
    components: {
        VueEditor,
        PictureInput
    },
    data() {
        return {
            formData: {
                title: '',
                shortDescription: '',
                longDescription: '',
                postedDate: '',
                link: '',
                image: '',
            },
        }
    },
    methods: {
        onChange(e) {
            let file = e.target.files[0];
            let reader = new FileReader();
            if (file['size'] < 2111775) {
                reader.onloadend = (file) => {
                    this.formData.image = reader.result;
                }
                reader.readAsDataURL(file);
            } else {
                alert('File size can not be bigger than 2 MB')
            }
        },
        onSubmit() {
            if (this.formData.title === '' || this.formData.shortDescription === '') {
                alert('Fill form properly');

            } else {
                axios.post('/news/store', this.formData)
                    .then(redirect => {
                        window.location.href = "/news";
                    }).catch(error => {
                    alert(error);

                });
            }

        }
    },

}
</script>

<style scoped>

</style>
