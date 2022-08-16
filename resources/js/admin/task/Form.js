import AppForm from '../app-components/Form/AppForm';

Vue.component('task-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                start_date:  '' ,
                end_date:  '' ,
                enabled:  false ,
                
            }
        }
    }

});