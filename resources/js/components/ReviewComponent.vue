<template>
  <Slick ref="reviews" class="review-slider" :options="slickOptions">
    <div class="review mt-3" v-for="review in reviews">
        <div class="d-flex align-items-start flex-column" style="height: 250px;">
            <div class="mb-auto p-2 review-desc mx-auto">
                {{ review.comment }}
            </div>
            <div class="review-name p-2 mx-auto">
                {{ review.username }}
            </div>
        </div>
    </div>
  </Slick>
</template>

<script>
import Slick from 'vue-slick';

export default {
    components: {Slick},
    props: {
      reviewData: {
        type: Array,
        required: true,
      }
    },
    data() {
        return {
            reviews: this.reviewData,
            slickOptions: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3000,
                focusOnSelect: false,
                dots: true,
                customPaging: function(slider, i) {
                  return '<div class="review-dot" id=' + i + "></div>";
                },
            },
        };
    },
    mounted() {
        console.log('Review component mounted.')
    }
}
</script>
