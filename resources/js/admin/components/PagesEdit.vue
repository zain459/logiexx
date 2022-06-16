<template>
    <div class="card">
        <form @submit.prevent="onSubmit" method="post" enctype="multipart/form-data">
            <div class="card-body">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" v-model="formData.title" placeholder="Title" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" v-model="formData.slug" class="form-control" name="slug"
                               placeholder="Slug"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description</label>
                    <div class="col-sm-10">
                        <vue-editor v-model="formData.description" required></vue-editor>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </div>
        </form>

    </div>

</template>

<script>
import {VueEditor} from "vue2-editor";

export default {
    props: ['page'],
    components: {
        VueEditor,
    },
    data() {
        return {
            formData: {
                title: this.page.title,
                slug: this.page.slug,
                description: this.page.description,
            },
        }
    },
    methods: {
        onSubmit() {
            console.log(this.formData);
            if (this.formData.title === '' || this.formData.description === '') {
                alert('Fill form properly');

            } else {
                console.log(this.formData.image)
                axios.post('/pages/' + this.page.id + '/update', this.formData)
                    .then(redirect => {
                        window.location.href = "/pages";
                    }).catch(error => {
                    alert(error);

                });
            }

        },

    },

}
</script>

<style scoped>

</style>
