<template>
    <div
        <button  class="btn btn-sm btn-primary" @click="followProfile" v-text="follows"></button>
    </div>
</template>

<script>
    export default {
        props : ['profileId','follows'],

        methods: {
            followProfile () 
            {
                
                axios.get('/follows/'+ this.profileId)
                    .then(response =>{
                        console.log(response.data);
                    }                        
                        )
                    .catch(errors => {
                        if(errors.response.status == 401){
                            window.location = "/login";
                        }
                    }
                        
                    )
                  
            }
            follows ()
            {
                return (this.follows) ? "ne plus suivre" : "suivre";
            }
        }
            
        
    }
</script>
