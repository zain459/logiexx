<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header mb-3">{{ name }}</div>
                    <div class="card-body">
                        <v-select
                            multiple
                            :options="data"
                            v-model="selected"
                            @change="sendMessage()"
                        ></v-select>
                        <span>  Selected: {{ selected }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Vue from "vue";
import vSelect from "vue-select";
import "vue-select/dist/vue-select.css";

Vue.component("v-select", vSelect);
export default {
    data() {
        return {
            name: "Select Component",
            data: [
                'one', 'two', 'three'
            ],
            selected: '',
        }
    },

    methods: {
        sendMessage() {
            console.log('hello');
        },
    },

}
</script>
