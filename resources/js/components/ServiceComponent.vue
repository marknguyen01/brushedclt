<template>
  <Slick ref="services" class="service-slider" :options="slickOptions">
    <a class="service" v-for="s in serviceData" :key="s.key" :href="s.price > 0 ? s.href : '/#team'">
        <div class="service__content w-100 py-3 py-md-4 py-lg-5 px-1 d-flex align-items-center justify-content-center">
          <div>
            <div class="service-title font-size--20 text-center">
              {{ s.name }}
            </div>
            <div class="service-price text-center mt-3">
             <span v-if="s.price > 0">starts at ${{ s.price }}</span>
             <span v-else>Prices are subject to each stylist</span>
            </div>
          </div>
        </div>
    </a>
  </Slick>
</template>

<script>
import Slick from 'vue-slick';
export default {
    components: {Slick},
    props: {
      serviceData: {
        type: Array,
        required: true,
      }
    },
    data() {
        return {
            services: this.serviceData,
            slickOptions: {
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 2500,
                focusOnSelect: false,
                infinite: false,
                responsive: [
                  {
                    breakpoint: 991.98,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                    }
                  },
                ]
            },
        };
    },
    mounted() {
        console.log('Service component mounted.')
    }
}
</script>
