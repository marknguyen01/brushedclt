<template>
    <transition name="modal" v-if="showModal">
    <div class="modal-mask">
        <div class="modal-wrapper">
        <div class="modal-container">
            <div class="modal-body">
            <slot name="body">
                <span v-html="alertData"></span>
            </slot>
            </div>
            <div class="modal-footer">
            <slot name="footer">
                <button class="modal-default-button" @click="showModal = false">Close</button>
                <button class="modal-default-button" @click="dontshow">Don't show me again</button>
            </slot>
            </div>
        </div>
        </div>
    </div>
    </transition>
</template>

<script>
export default {
    props: {
        alertData: {
            type: String,
            required: true,
        }
    },
    data() {
        return {
            showModal: true
        }
    },
    mounted() {
        if (localStorage.show) {
            this.showModal = JSON.parse(localStorage.getItem('show'));
        }
    },
    methods: {
        dontshow: function() {
            this.showModal = false;
            localStorage.setItem('show', JSON.stringify(false)); 
        }
    }
}
</script>