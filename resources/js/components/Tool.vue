<template>
    <div :class="className" role="alert">
        <strong class="font-bold font-black mb-3"> {{panel.fields.title}} </strong>
        <div class="mt-2"> {{panel.fields.message}} </div>
    </div>
</template>


<script>
export default {
    props: ['resourceName', 'resourceId', 'panel'],
    computed: {
        className() {
            const classes = {
                'success': 'bg-success-light',
                'warning': 'bg-warning-light',
                'info': 'bg-info-light',
            }

            return classes[this.panel.fields.severity]
        }
    }
}
</script>
