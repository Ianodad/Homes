<template>
    <div>
        {{ bid.current_bid }}
        <span>Bid {{ bid.created_date  }}</span>
        <div class="media">
            <img :src="bid.user.avatar" />
        </div>
        <div class="media-body">
            <a :href="bid.user.url">{{ bid.user.name }}</a>
        </div>
    </div>
</template>

<script>
export default {
    props: ["bid"],

    computed: {
        postDate() {},
    },
    data() {
        return {
            bid: this.bid,
        };
    },
    mounted() {
        console.log(this.bid);
    },
};
</script>

<style lang="scss" scoped></style>
