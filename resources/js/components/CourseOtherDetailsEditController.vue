<template>
    <div class="card">
        <div class="card-header fw-bold">Edit</div>
        <div class="card-body">

            <form @submit.prevent="update">
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
    props: ["info"],

    data() {
        return {
            formData: {
                title: this.info.title,
                description: this.info.description,
            },
        }
    },

    methods: {
        update() {
            if (this.formData.title === '' || this.formData.description === '') {
                alert('Fill form properly');

            } else {
                axios.post('/course/other-details/' + this.info.id + '/update', this.formData)
                    .then(redirect => {
                        window.location.href = "/course/" + this.info.course_id + "/other-details";
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
