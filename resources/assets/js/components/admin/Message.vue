<template>
    <div class="col-12 card" id="sendmessage">
                <div class="card card-info">
                  <div class="card-header" data-toggle="tooltip" data-displacement="top" title data-original-title="Click on - to expand"><div class="float-right"><a data-collapse="#mycard-collapse" class="btn btn-icon">
                    <i class="ion ion-minus"></i></a></div><h4>Send Message</h4></div>
                  </div>
                  <form method="post" class="needs-validation" novalidate="">
                  <div class="collapse " id="mycard-collapse" style="">
                    <div class="form-group">
                        <div>
                            <label class="typo__label">Select Audience</label>
                            <multiselect v-model="value" :options="options" :multiple="true" :close-on-select="true" :clear-on-select="true" :hide-selected="true" :preserve-search="true" placeholder="Pick Audience" label="name" track-by="name" :preselect-first="false">
                                <template slot="tag" slot-scope="props"><span class="custom__tag"><span>{{ props.option.name }}</span><span class="custom__remove" @click="props.remove(props.option)">❌</span></span></template>
                            </multiselect>
                           
                        </div>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" required>
                      <div class="invalid-feedback">
                        Please fill in the title
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Content</label>
                      <textarea class="summernote-simple"></textarea>
                    </div>
                  
                  <div class="card-footer">
                    <button class="btn btn-outline-primary">Send Message</button>
                  </div>
                  </div>
                </form>
          </div>
</template>

<script>
 import Multiselect from 'vue-multiselect'

export default {
    components: { Multiselect },
    template: '#sendmessage',
    data(){
        return({
            status: "Sent" ,
            value: [],
            options: [
        { name: 'Vue.js', language: 'JavaScript' },
        { name: 'Adonis', language: 'JavaScript' },
        { name: 'Rails', language: 'Ruby' },
        { name: 'Sinatra', language: 'Ruby' },
        { name: 'Laravel', language: 'PHP' },
        { name: 'Phoenix', language: 'Elixir' }
      ]
        })
    },
    mounted() {
            console.log('Send message Component mounted.')
        },

    created(){
        this.sendMessage();
    },

    methods: {
        sendMessage(){
            //code to send a post request
        }
    }
}
</script>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
