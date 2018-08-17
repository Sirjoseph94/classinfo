<template>
     <div class="card" id="newsfeed">
          <div class="card-header">
            <div class="float-right">
              <a href="#" class="btn btn-primary">View All</a>
            </div>
            <h4>Latest News</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    <th>From</th>
                    <th>Time</th>
                  </tr>
                </thead>
                <tbody>   
                                        
                  <tr v-for="post in newsData.slice(0,5)" v-bind:key="post.id">
                    <td>
                      {{ post.title }}
                      <div class="table-links">
                        in <a href="#">Web Development</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                       
                      </div>
                    </td>
                    <td>
                      <a href="#"><img src="/dist/img/avatar/avatar-1.jpeg" alt="avatar" width="30" class="rounded-circle mr-1"> Bagus Dwi Cahya</a>
                    </td>
                    <td>
                    <span><timeago :datetime= "article.publishedAt" :auto-update="60" :max-time="60"></timeago></span>  
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
</template>

<script>
    export default {
      props: ['newsData'],
        template: "#newsfeed",
        data() {
            return({
                 news : []
            })
           },
        created() {
           
            this.getNews();

        },
         methods: {
      getNews(){
        // newsData="'{!! json_encode($news) !!}
         let news = this.newsData;
        
      }

    }
  }
</script>