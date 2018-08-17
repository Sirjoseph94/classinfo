<template>
 <div class="card-body " id="newsng">             
              <ul class="list-unstyled list-unstyled-border">
                
                <li class="media" v-for="article in articles.slice(0, 5)" v-bind:key="article.index">
                 <div class="media-body">
                    <a target="_blank" class="media-title" :href="article.url">{{ article.title }}</a><br>
                    <small><timeago :datetime= "article.publishedAt" :auto-update="60" :max-time="60"></timeago></small> | <small>{{article.source.name}}</small>
                  </div>
                </li>
               
              </ul>
              
  </div>
</template>

<script>

import VueTimeago from "vue-timeago";

Vue.use(VueTimeago, {
  name: 'timeago',
  locale: 'en',

})

export default {
    template: '#newsng',
    data() {
      return{
        articles : []
      }
    },

    created(){
      this.fetchNews()
    },
    methods: {
      fetchNews(){
       const url = "https://newsapi.org/v2/top-headlines?country=ng&apiKey=d518afddf9924f3ca7369b0438d397aa";
       fetch (url)
        .then(res => res.json())
        .then( res => {
          this.articles = res.articles
        })
      }
    }
    }
</script>