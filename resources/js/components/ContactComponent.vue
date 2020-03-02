<template>
  <div>
    <gmap-map
      :center="options.center"
      :options="options"
      ref="mapRef"
      @click="openWindow()">
    <GmapInfoWindow :position="options.center">
        <p><strong>Brushed</strong></p>
        <p><a :href="'http://maps.apple.com/?daddr=' + encodeURI(contactData.address)">{{ contactData.address }}</a></p>
        <p><a :href="'tel:' + contactData.phone">{{ contactData.phone }}</a></p>
    </GmapInfoWindow>
    </gmap-map>
  </div>
</template>

<script>

export default {
  name: "GoogleMap",
  props: {
      contactData: {
          type: Object,
          required: true
    }
  },
  data() {
    return {
      options: {
        disableDefaultUI: true,
        center: { lat: 35.2209048, lng: -80.8180333 },
        zoom: 16,
        zoomControl: false,
        gestureHandling: 'none',
        autobindAllEvents: true,
      }
    };
  },

  methods: {
      openWindow: function() {
        window.open('http://maps.apple.com/?daddr=' + encodeURI(this.contactData.address))
      }
  },

  mounted() {
      console.log('Contact component mounted');
  },
};
</script>
