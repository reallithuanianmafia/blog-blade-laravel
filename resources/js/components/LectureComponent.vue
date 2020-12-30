<template>
    <div>
        <span>{{name}}</span>
        <input type="text" class="form-control" v-model="name" placeholder="">
    </div>
</template>

<script>
export default {
   data:()=>(
   {
        name: 'Aasdasd',
        age: 20,
        number: '994503574848',
        fruits: ['apple','orange','banana'],
        myHtml: "<strong>Salam</strong>"
   }),
   methods: {
       ageIncrease(){
           this.age++;
       },
       ageDelete(){
           this.age--;
       }
   },

}
</script>