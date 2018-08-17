<template>
    <div class="card">
          <div class="card-header">
            <div class="float-right">
              <a href="#" class="btn btn-primary">View All</a>
            </div>
            <h4>My recent posts</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Title</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>                         
                  <tr>
                    <td>
                      Introduction Laravel 5
                      <div class="table-links">
                        in <a href="#">Web Development</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                      </div>
                    </td>
                   
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Laravel 5 Tutorial - Installation
                      <div class="table-links">
                        in <a href="#">Web Development</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                      </div>
                    </td>
                   
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Laravel 5 Tutorial - MVC
                      <div class="table-links">
                        in <a href="#">Web Development</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                      </div>
                    </td>
                    
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Laravel 5 Tutorial - Migration
                      <div class="table-links">
                        in <a href="#">Web Development</a>
                        <div class="bullet"></div>
                        <a href="#">View</a>
                      </div>
                    </td>
                   
                    <td>
                      <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-edit"></i></a>
                      <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="ion ion-trash-b"></i></a>
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
    data(){
        return({
            posts: []
        })
    },


    created(){
        this.getPosts()
    },



    methods: {
        //fetch data from Db with CRUD functionality
        getPosts(){
       const url = "";
       fetch (url)
        .then(res => res.json())
        .then( res => {
          this.articles = res.articles
            })
        }
    }
}
</script>

<style>

</style>
