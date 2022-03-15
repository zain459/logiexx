<template>
    <div class="card">
        <div class="card-header fw-bold">Update News</div>
        <div class="card-body">
            <form @submit.prevent="onSubmit" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" v-model="formData.title" placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Posted Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" v-model="formData.postedDate" required/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">link</label>
                    <div class="col-md-4">
                        <input type="url" class="form-control" v-model="formData.link" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Short Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" v-model="formData.shortDescription" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Long Description</label>
                    <div class="col-sm-10">
                        <vue-editor v-model="formData.longDescription" required></vue-editor>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <picture-input   ref="pictureInput" width="150" height="150" accept="image/jpeg,image/png" v-model="formData.image"></picture-input>
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
    props:['news'],
    components: {
        VueEditor,
        PictureInput
    },
    data() {
        return {
            formData: {
                title: this.news.title,
                shortDescription: this.news.short_description,
                longDescription: this.news.long_description,
                postedDate: this.news.posted_date,
                link: this.news.link,
                image: this.news.image,
            },
        }
    },
    methods:{
        onSubmit(){
            console.log(this.formData);
            if (this.formData.title === '' || this.formData.shortDescription === '') {
                alert('Fill form properly');

            } else {
                axios.post('/news/'+this.news.id+'/update', this.formData)
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
