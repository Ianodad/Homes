<template>
    <div class="my-4">
        <h4>{{ currencySet }}</h4>
        <p>Bidded {{ bid.created_date  }}</p>
        <div class="row">
        <div class="media" style="width: 10px">
            <img :src="bid.user.avatar" />
        </div>
        <div class="media-body align-bottom">
            <a :href="bid.user.url">{{ bid.user.name }}</a>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["bid"],

    computed: {
        currencySet() {
            const current = (this.bid.current_bid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,')
            return `Ksh ${current}`
        },
    },
    data() {
        return {
            bid: this.bid,
        };
    },
    mounted() {
        // console.log(this.bid);
    },
};
</script>

<style lang="scss" scoped></style>
