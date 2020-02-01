<template>
<Slick ref="team" class="team-slider" :options="slickOptions">
  <div v-for="m in members" class="member">
    <img :src="'/storage/' + m.image" :alt="m.name" />
    <div class="member__name mt-5">{{ m.name }}</div>
    <div class="member__role mt-1">{{ m.role }}</div>
    <div class="member__number mt-1"><a :href="'tel:' + m.phone_number">{{ m.phone_number }}</a></div>
  </div>
</Slick>
</template>


<script>
import Slick from 'vue-slick';
export default {
    components: {Slick},
    props: {
      teamData: {
        type: Array,
        required: true,
      }
    },
    data() {
        return {
            members: this.teamData,
            slickOptions: {
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 1000,
                focusOnSelect: false,
                responsive: [
                  {
                    breakpoint: 991.98,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      infinite: true,
                    }
                  },
                ]
            },
        };
    },
    mounted() {
        console.log('Team component mounted.')
    }
}
</script>
