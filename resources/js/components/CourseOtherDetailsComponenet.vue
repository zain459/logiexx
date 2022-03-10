<template>
    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body">

            <form @submit.prevent="onSubmit">
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" v-model="formData.title" name="title"
                               placeholder="Title"/>
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

            </form>
        </div>
    </div>
</template>

<script>
import {VueEditor} from "vue2-editor";

export default {
    components: {
        VueEditor
    },
    props: ["course"],

    data() {
        return {
            formData: {
                title: '',
                description: '',
                courseId: this.course,
            },
        }
    },
    methods: {
        onSubmit() {
            console.log(this.formData);
            if (this.formData.title === '' || this.formData.description === '') {
                alert('Fill form properly');

            } else {
                axios.post('/course/other-details/store', this.formData)
                    .then(redirect => {
                        window.location.href = "/course/" + this.course + "/other-details";
                    }).catch(error => {
                    alert(error);

                });
            }
        }
    }
}
</script>
<style scoped>

</style>
