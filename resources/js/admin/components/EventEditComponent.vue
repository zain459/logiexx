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

                    <label class="col-form-label col-sm-2 text-sm-end">Start Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" v-model="formData.startDate"/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">End Date</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" v-model="formData.endDate"/>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description</label>
                    <div class="col-sm-10">
                        <vue-editor v-model="formData.description" required></vue-editor>
                    </div>
                </div>

                <div class="mb-3 row" v-if="event.image">
                    <label class="col-form-label col-sm-2 text-sm-end">Image</label>
                    <div class="col-sm-10">
                        <img :src="event.image" width="200" class="img-thumbnail" alt="Image">
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

export default {
    components: {
        VueEditor
    },
    props: ["event"],

    data() {
        return {
            formData: {
                title: this.event.title,
                description: this.event.description,
                startDate: this.event.start_date,
                endDate: this.event.end_date,
                link: this.event.link,
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
        update() {
            if (this.formData.title === '' || this.formData.description === '') {
                alert('Fill form properly');

            } else {
                axios.post('/event/' + this.event.id + '/update', this.formData)
                    .then(redirect => {
                        window.location.href = "/events";
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
