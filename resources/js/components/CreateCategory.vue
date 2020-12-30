<template>
    <div>
        <form v-on:click="formSubmit('Stop', $event)">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" v-model="name" v-bind:class="{'' : errors['name']==2, 'is-invalid' : errors['name']==false, 'is-valid' : errors['name'] == true}" >
                <div v-if="errors['name']==false" class="invalid-feedback">{{errors['name_error_string']}} / Now: {{name.length}} </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" v-model="description" v-bind:class="{'' : errors['description']==2, 'is-invalid' : errors['description']==false, 'is-valid' : errors['description'] == true}" ></textarea>
                <div v-if="errors['description']==false" class="invalid-feedback">{{errors['description_error_string']}} / Now: {{description.length}} </div>
            </div>
            <div class="form-group">
                <label for="slug">Slug <small>(Optional)</small></label>
                <input type="text" class="form-control" v-model="slug" v-bind:class="{'' : errors['slug']==2, 'is-invalid' : errors['slug']==false, 'is-valid' : errors['slug'] == true}" >
                <div v-if="errors['slug']==false" class="invalid-feedback">{{errors['slug_error_string']}} / Now: {{slug.length}} </div>
            </div>
            <div class="form-group">
                <label for="select_category">Category</label>
                <select class="custom-select is-valid" v-model="categorySelected">
                    <option v-for="(item, key) in passed_data" :value="item['id']">{{item['name']}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="select_category">Status</label>
                <select class="custom-select is-valid" v-model="statusSelected">
                    <option v-for="item in status" :value="item">{{item==1 ? 'Active' : 'Inactive'}}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="parent_id">Parent Category <small>(Default: Main Category)</small></label>
            </div>
        </form>
        <input type="submit" v-model="submit" v-on:click="formSubmit('Cannot submit.', $event)">
    </div>
</template>

<script>
    export default {
        props: [
            'passed_data'
        ],
        created()
        {
            this.passed_data.unshift({"id":0, name: "Main Category"});
            console.log(this.passed_data);
        },
        data(){
            return {
                name: '',
                description: '',
                slug: '',
                allcategories: [],
                status: [0,1],
                statusSelected: 1,
                category: 0,
                categorySelected: 0,
                submit: "Submit",
                errors: {
                    name: 2,
                    description: 2,
                    slug: 2,
                    name_error_string: '',
                    description_error_string: '',
                    slug_error_string: '',
                },
            }
        },
        watch:
        {
            name(val, old)
            {
                this.errors['name_error_string']='';
                if(val.length<2 || val.length>30){
                    this.errors['name']=false;
                    this.errors['name_error_string']='Must be more than 2 and less than 30 characters';
                }
                else
                {
                    this.errors['name']=true;
                    this.errors['name_error_string']='';
                }
            },
            description(val, old)
            {
                this.errors['description_error_string']='';
                if(val.length<2 || val.length>300){
                    this.errors['description']=false;
                    this.errors['description_error_string']='Must be more than 2 and less than 300 characters';
                }
                else
                {
                    this.errors['description']=true;
                    this.errors['description_error_string']='';
                }
            },
            slug(val, old)
            {
                this.errors['slug_error_string']='';
                if(val.length>30){
                    this.errors['slug']=false;
                    this.errors['slug_error_string']='Must be more than 2 and less than 300 characters';
                }
                else
                {
                    this.errors['slug']=true;
                    this.errors['slug_error_string']='';
                }
            }
        },
        methods:
        {
            myConsole: function(event){
                console.log(this.passed_data);
            },
            formSubmit: function(message, event){
                event.preventDefault();
                
                if(this.errors.name==2){
                    this.errors.name=false;
                    this.errors.name_error_string="Must not be equal to 0";
                }
                if(this.errors.description==2){
                    this.errors.description=false;
                    this.errors.description_error_string="Must not be equal to 0";
                }
                if(this.errors.name || this.errors.description){
                    alert('false');
                }
            }
        }
    }
</script>
