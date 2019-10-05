<template>


	<div>
			<div class="search-bar input-group"
			

				 @click="showSearchModal">
              <!-- <input type="text" class="form-control" placeholder="Search...">
              <div class="input-group-addon"><i class="tim-icons icon-zoom-split"></i></div> -->
              <button 

              		class="btn btn-link" 

              				id="search-button" 

              					data-toggle="modal" 

              						data-target="#searchModal">
              
                <i class="tim-icons icon-zoom-split" style="color: #fff;"></i>
              
              </button>
              <!-- You can choose types of search input -->
            </div>
            
           
		
              <input

              	 slot="header" 

              	 	v-model="keywords"

              	 		 type="text"

						

              	 		 	 class="form-control"

              	 		 	 	 id="inlineFormInputGroup"

              	 		 	 	  placeholder="Enter a name">

					 <ul 
					 
					 	class="ls-s-none"
					 		v-if="suggestions.length > 0">
            
						<li v-for="(result, index) in suggestions" 
						
								:key="index" 

									class="level search-item"
										>

										<a :href="result.url" 

										

                                        class="avatar avatar-sm fit" 

                                            data-toggle="tooltip" 

                                                :data-original-title="result.login">


											<img 

                                            alt="Image placeholder" 

												
                                                :src="result.avatar_url" 


                                                    class="rounded-circle">

                                     

                                      </a>

										<a :href="result.url"
										
											v-html="highlight(result.login)"
											
											>	</a>


											

											<span  
											
												class="btn btn-1 btn-outline-info btn-round float-right mr-a">

												

											</span>

											
											
											</li>
       				
					</ul>

					<!-- style="min-height:300px;" -->


    </div>
	


</template>




<script type="text/javascript">






	export default{

		components:{


	
		},

		data(){

			return {

				searchModalVisible: false,
        		
				keywords: '',
				
				value: '',
			
				suggestionAttribute: 'title',
				
				suggestions: [],
				
				selectedEvent: ""



			};


		},

		watch: {
		
			
			keywords(after, before) {
			
				this.fetch();
			
			}
        },

		methods:{

			showSearchModal(){
				
				
				// document.getElementById('thread-creation-button').style.display = 'none';

				this.searchModalVisible = true;



			},

			clickInput() {
		   
		 	    this.selectedEvent = 'click input'
			
			},
			
			clickButton() {
			
				this.selectedEvent = 'click button'
			
			},
			
			selected() {
			
				this.selectedEvent = 'selection changed'
			
			},
			
			enter() {
			
				this.selectedEvent = 'enter'
			
			},
			
			keyUp() {
			
				this.selectedEvent = 'keyup pressed'
			
			},
			
			keyDown() {
			
				this.selectedEvent = 'keyDown pressed'
			
			},
			
			keyRight() {
			
				this.selectedEvent = 'keyRight pressed'
			
			},
			
			clear() {
			
				this.selectedEvent = 'clear input'
			
			},
			
			escape() {
			
				this.selectedEvent = 'escape'
			
			},
            fetch() {
				
				this.suggestions = []
                    // ?q=tom+repos:%3E42+followers:%3E1000
					axios.get('https://api.github.com/search/users', {
                    
                    params: {
                        
                        q: this.keywords
                    
                    }


                	})
				
					.then(({data}) => {
                        
                        console.log('retrive data from github')
						console.log(data);

						data.items.forEach((a) => {


					
							this.suggestions.push(a)



					
						
						})
						

						dd(this.suggestions, 'iam suggestion here taekoo')
					})
					
					.catch( (error)=>{


                        console.log('errro')
                        console.log(error)

					})
			},
			
			highlight(text) {
	
				return text.replace(new RegExp(this.keywords, 'gi'), '<span class="highlighted">$&</span>');
			
			}



		}




	}
	



</script>

<style type="text/css">
	
	.full-height{

		height: 1000px;

	}

	.highlighted { color: red }


	.ls-s-none{

	  list-style: none !important;

	}

	.modal-header{

		border-bottom: unset ! important;

	}


	.mcc{
			
		position: fixed;



		border-radius: 30px !important;
    		
	}


	@media(min-width: 576px){
	
		.mcc{
			
			position: fixed;
  
			
		}

	}

	.search-item{

		padding: 5px;

		border-bottom: 1px dashed;


	}





</style>