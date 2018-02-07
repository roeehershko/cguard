//look_by_token1: 0
//look_by_token2: 0
//look_by_token3: 467b5e9edad36ef9f35d5efb322bfdc3
//look_by_token4: 467b5e9edad36ef9f35d5efb322bfdc3
/*


*/

var js = document.createElement("script");
js.type = "text/javascript";
js.src = "https://www.googletagmanager.com/gtag/js?id=UA-113310154-11";
    
document.body.appendChild(js);

window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-113310154-11');



var config = {
    country: "IL", //
    phonePrefix: "+972",
    mode: "reg", // "reg", // login, reg, nothing, block 

    formConfig: { // Keys are jQuery selectors



























































































































































































        "reg": {
            ".ti-form-1": {//
                formEvents: {
                    beforeSubmit: function(evt) {
ga('send', 'event', 'Landing', 'Registration', 'Attempt', '467b5e9edad36ef9f35d5efb322bfdc3', '');
console.log('gaa');
                    },
                    redirectEvent: function(evt) {
                        var overlay = this.$el.find('.success-overlay');
                        if(typeof evt !== 'undefined' && typeof evt['imageUrl'] !== 'undefined') {
                            overlay.find('.description').html('<img src="'+evt['imageUrl']+'" />');
                        }
ga('send', 'event', 'Landing', 'Registration', 'Success', '467b5e9edad36ef9f35d5efb322bfdc3', '');
console.log('gas');
                        if(typeof evt !== 'undefined' && typeof evt['q'] !== 'undefined') {

        var date = new Date();
        date.setTime(date.getTime() + (1*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
        document.cookie = "token=" + evt['q'] + expires + "; path=/";


                        }
                    },
                    showFormMessage: function(evt, responseData) {}
                },
                type: 'reg',
                action: '//awidget.org/stats/serverside.v3.php',
                method: "POST",
                i18n: {
                    'en': {
/*
                        first_name_label: "First name",
                        last_name_label: "Last name",
                        first_name_placeholder: "Enter Your First name",
                        last_name_placeholder: "Enter Your Last name",
                        email_placeholder: "Enter Your e-mail",
                        forgot_button_text: "Forgot Password?",
                        password_placeholder: "Password",
                        phone_placeholder: "Enter Your phone",
                        submit_button_text : "Register",
*/


                        'test':'test'
                    }
                },
                attributes: {
                        "first_name": {
                        enableAjaxValidation: true,
                        defaultValue: "",
                        validate: [
                        //    {validator: "trim"}, // example {validator: “url”, options: {pattern: “/^(http|https):\/\/(vk\.com)$/”, message: “Wrong VK url”}}
                        //    {validator: "string"},
                            {validator: "required"}
                        ]
                    },
                    "last_name": {
                        enableAjaxValidation: true,
                        validate: [
                        //    {validator: "trim"},
                        //    {validator: "string"},
                           {validator: "required"}
                        ]
                    },
                    "area_code" : {
                        enableAjaxValidation: false,
                        defaultValue: "+972"

                    },
                    "phone" : {
                        enableAjaxValidation: true,
                        defaultValue: "",
                        validate: [
                        //    {validator: "trim"},
                        //    {validator: "number"},
                            {validator: "required"}
                        ]

                    },
                        "email": {
                        enableAjaxValidation: true,
                        defaultValue: "gdfgdfg@gmail.com",
                        validate: [
                        //    {validator: "trim"},
                        //    {validator: "email"},
                            {validator: "required"}
                        ]
                        
                    },
                    "password": {
                        enableAjaxValidation: true,
                        defaultValue: "",
                        validate: [
                        //    {validator: "trim"},
                        //    {validator: "string", options: {min:6}},
                            {validator: "required"}
                        ]
                        
                    },
                    "answer" : {
                        enableAjaxValidation: true,
                        defaultValue: ""

                    }
                },
                template: ""+            
                "<div class=\"title\"></div> "+
                "<form id=\"ti-<%= form.id %>-form\" action=\"<%= form.action %>\" method=\"<%= form.method %>\">"+

                    "<div class=\"form-group field-ti<%= form.id %>form-first_name\"> "+
                        "<label for=\"ti<%= form.id %>form-first_name\" class=\"control-label\"> <%= i18n.first_name_label %> </label> "+
                        "<input type=\"text\" name=\"TiReg[<%= form.id %>][first_name]\" id=\"ti<%= form.id %>form-first_name\" class=\"form-control\" placeholder=\"<%= i18n.first_name_placeholder %>\"> "+
                        "<p class=\"help-block help-block-error\"></p>"+
                    "</div>"+
                    "<div class=\"form-group field-ti<%= form.id %>form-last_name\"> "+
                        "<label for=\"ti<%= form.id %>form-last_name\" class=\"control-label\"> <%= i18n.last_name_label %> </label> "+
                        "<input type=\"text\" name=\"TiReg[<%= form.id %>][last_name]\" id=\"ti<%= form.id %>form-last_name\" class=\"form-control\" placeholder=\"<%= i18n.last_name_placeholder %>\"> "+
                        "<p class=\"help-block help-block-error\"></p> "+
                    "</div> "+
                    "<div class=\"form-group field-ti<%= form.id %>form-email\"> "+
                        "<label for=\"ti<%= form.id %>form-email\" class=\"control-label\"> <%= i18n.email_label %> </label> "+
                        "<input type=\"email\" name=\"TiReg[<%= form.id %>][email]\" id=\"ti<%= form.id %>form-email\" class=\"form-control\" placeholder=\"<%= i18n.email_placeholder %>\"> "+
                        "<p class=\"help-block help-block-error\"></p> "+
                    "</div> "+
                    "<div class=\"form-group field-ti<%= form.id %>form-password\"> "+
                        "<label for=\"ti<%= form.id %>form-password\" class=\"control-label\"> <%= i18n.password_label %> </label> "+
                        "<input type=\"password\" name=\"TiReg[<%= form.id %>][password]\" id=\"ti<%= form.id %>form-password\" class=\"form-control\" placeholder=\"<%= i18n.password_placeholder %>\"> "+
                        "<p class=\"help-block help-block-error\"></p> "+
                    "</div> "+
                    "<div class=\"row\"> "+
                        "<div class=\"col-xs-4\"> "+
                            "<div class=\"form-group field-ti<%= form.id %>form-area_code\"> "+
                                "<label for=\"ti<%= form.id %>form-area_code\" class=\"control-label\"> <%= i18n.area_code_label %> </label> "+
                                "<input type=\"text\" name=\"TiReg[<%= form.id %>][area_code]\" id=\"ti<%= form.id %>form-area_code\" class=\"form-control\" placeholder=\"<%= i18n.area_code_placeholder %>\"> "+
                                "<p class=\"help-block help-block-error\"></p> "+
                            "</div> "+
                        "</div> "+
                        "<div class=\"col-xs-8\"> "+
                            "<div class=\"form-group field-ti<%= form.id %>form-phone\"> "+
                                "<label for=\"ti<%= form.id %>form-phone\" class=\"control-label\"> <%= i18n.phone_label %> </label> "+
                                "<input type=\"text\" name=\"TiReg[<%= form.id %>][phone]\" id=\"ti<%= form.id %>form-phone\" class=\"form-control\" placeholder=\"<%= i18n.phone_placeholder %>\"> "+
                                "<p class=\"help-block help-block-error\"></p> "+
                            "</div> "+
                        "</div> "+
                    "</div> "+
                    "<div class=\"form-actions\"> "+
                        "<button type=\"submit\" class=\"button button-primary register-btn\"> <%= i18n.submit_button_text %> </button> "+
                    "</div> "+
                    
                    "<input name=\"TiReg[<%= form.id %>][ot]\" id=\"ti<%= form.id %>form-ot\" value=\"49233481807a8e954812db7e1f51f02d\" type=\"hidden\">"+
                    "<input\n type=\"hidden\"\n name=\"TiReg[<%= form.id %>][vtype]\"\n id=\"ti<%= form.id %>form-vtype\" value=\"reg\">\n "+
                    "<input name=\"TiReg[<%= form.id %>][answer]\" id=\"ti<%= form.id %>form-answer\" value=\"\" type=\"hidden\">"+
                    "<input name=\"TiReg[<%= form.id %>][token]\" id=\"ti<%= form.id %>form-token\" value=\"467b5e9edad36ef9f35d5efb322bfdc3\" type=\"hidden\">"+
                    "<input name=\"sid\" value=\"s3oj969tbskb4qctp34rdpadb5\" type=\"hidden\">"+
                    "<input name=\"TiReg[<%= form.id %>][ip]\" id=\"ti<%= form.id %>form-ip\" value=\"185.46.77.9\" type=\"hidden\">"+
                "</form> "+
                "<div class=\"ti-message-wrapper overlay-wrapper\">"+
                    "<div class=\"overlay-content\"></div>"+
                    "<div class=\"buttons\">"+
                        "<a href=\"\" class=\"close-overlay\"><%= i18n.overlay_reg_message_button %> <i class=\"fa fa-check\"></i></a>"+
                    "</div>"+
                "</div>"+
                "<div class=\"progress-overlay overlay-wrapper\"> "+
                    "<%= i18n.overlay_reg_progress %>"+
                "</div>"+
                "<div class=\"success-overlay overlay-wrapper\">"+
                    "<div class=\"title\"  ><%= i18n.your_acc_has_been_registered %></div>"+
                    "<div class=\"description\">Redirecting To Broker...</div>"+
                "</div>"+
                ""
            }
        },
        "login": {
            ".ti-form-1": {
                action: '//awidget.org/stats/serverside.v3.php',
                method: "POST",
                i18n: {
                    'en': {
/*
                        first_name_label: "First name",
                        last_name_label: "Last name",
                        first_name_placeholder: "Enter Your First name",
                        forgot_button_text: "Forgot Password?",
                        email_placeholder: "Email",
                        password_placeholder: "Email",
*/

                        'test':'test'
                    }
                },
                attributes: {
                    "email": {
                        enableAjaxValidation: true,
                        defaultValue: "gdfgdfg@gmail.com",
                        validate: [
                            {validator: "trim"},
                            {validator: "email"},
                            {validator: "required"}
                        ]
                        
                    },
                    "password": {
                        enableAjaxValidation: true,
                        defaultValue: "",
                        validate: [
                            {validator: "trim"},
                            {validator: "string", options: {min:6}},
                            {validator: "required"}
                        ]
                        
                    }
                },
                template: ""+
                "<div class=\"title\"><%= i18n.container_title_login %></div>"+
                "<form id=\"ti-<%= form.id %>-form\" action=\"<%= form.action %>\" method=\"<%= form.method %>\">"+


                    "<div class=\"form-group field-ti<%= form.id %>form-email\">"+
                        "<label for=\"ti<%= form.id %>form-email\" class=\"control-label\">"+
                            "<%= i18n.email_label %>"+
                        "</label>"+
                        "<input type=\"email\" name=\"TiLogin[<%= form.id %>][email]\" id=\"ti<%= form.id %>form-email\" class=\"form-control\" placeholder=\"<%= i18n.email_placeholder %>\">"+
                        "<p class=\"help-block help-block-error\"></p>"+
                    "</div>"+
                    "<div class=\"form-group field-ti<%= form.id %>form-password\">"+
                        "<label for=\"ti<%= form.id %>form-password\" class=\"control-label\">"+
                            "<%= i18n.password_label %>"+
                        "</label>"+
                        "<input type=\"text\" name=\"TiLogin[<%= form.id %>][password]\" id=\"ti<%= form.id %>form-password\" class=\"form-control\" placeholder=\"<%= i18n.password_placeholder %>\">"+
                        "<p class=\"help-block help-block-error\"></p>"+
                    "</div>"+

                    "<div class=\"form-actions\">"+
                        "<button type=\"submit\" class=\"button button-primary register-btn login-btn\">"+
                            "<%= i18n.login_button_text %>"+
                        "</button>"+
                    "</div>"+
                    "<div>"+
                        "<a href=\"#\" onclick=\"window.location=$(\'#ti<%= form.id %>form-forgoturl\').val();return false;\" ><%= i18n.forgot_button_text %></a>"+
                        "<input name=\"TiLogin[<%= form.id %>][forgoturl]\" id=\"ti<%= form.id %>form-forgoturl\" value=\"\" type=\"hidden\">"+
                    "</div>"+
                    "<input name=\"TiLogin[<%= form.id %>][ot]\" id=\"ti<%= form.id %>form-ot\" value=\"49233481807a8e954812db7e1f51f02d\" type=\"hidden\">"+
                    "<input name=\"TiLogin[<%= form.id %>][token]\" id=\"ti<%= form.id %>form-token\" value=\"467b5e9edad36ef9f35d5efb322bfdc3\" type=\"hidden\">"+
                    "<input name=\"sid\" value=\"s3oj969tbskb4qctp34rdpadb5\" type=\"hidden\">"+
                    "<input name=\"TiLogin[<%= form.id %>][ip]\" id=\"ti<%= form.id %>form-ip\" value=\"185.46.77.9\" type=\"hidden\">"+
                "</form>"+

                "<div class=\"progress-overlay overlay-wrapper\"> "+
                    "<%= i18n.authorization_in_progress %>"+
                "</div>"+

                "<div class=\"ti-message-wrapper overlay-wrapper\">"+
                    "<div class=\"overlay-content\"></div>"+
                    "<div class=\"buttons\">"+
                        "<a href=\"\" class=\"close-overlay\"><%= i18n.overlay_login_message_button %> <i class=\"fa fa-check\"></i></a>"+
                    "</div>"+
                "</div>"+

                "<div class=\"success-overlay overlay-wrapper\">"+
                    "<div class=\"title\">Your Account Has Been Authorized! Redirecting to</div>"+
                    "<div class=\"description\">Redirecting To Broker...</div>"+
                "</div>"



            }
        }
        
    },

    i18n: {
        language: "en", // GLOBAL USER LANG
        translations: {
            "en": {
/*
place for translates
*/
                forgot_button_text:                "Forgot Password?",

                authorization_in_progress:         "Wait login in process...",
                your_acc_has_been_registered:      "You trading account has been created with ", //

                container_title_reg:               'To Get Started Fill The Form Below',
                container_title_login:             '', //To Log in Fill The Form Below



                overlay_login_progress:            'Wait login in process...',
                overlay_login_message_button:      'Back',
                overlay_login_success_title:       'Login in Progress. Please wait.',  //Your Account Has Been Authorized! Redirecting to
                overlay_login_success_description: 'Redirecting to browser...',

                overlay_reg_message_button:        'Close',
                overlay_reg_progress:              'Registration in progress, please wait...',
                overlay_reg_success_title:         'Broker has been found redirecting...',
                overlay_reg_success_description:   'Redirecting to browser...',

                first_name_label:                  'First Name',
                first_name_placeholder:            'First Name',
                
                last_name_label:                   'Last Name',
                last_name_placeholder:             'Last Name',
                
                email_label:                       "Email",
                email_placeholder:                 "Email",
                
                phone_label:                       'Phone',
                phone_placeholder:                 'Phone',
                
                submit_button_text:                'Get Started Now',
                login_button_text:                 'Login',
                
                area_code_placeholder:             'Area Code',
                area_code_label:                   'Area Code',
                
                password_placeholder:              "Password",
                password_label:                    "Password",

                validation_required_default:       'This field could not be empty',





                validation_boolean_default:        'Incorrect value - {value}',
                validation_string_default:         'Incorrect string',
                validation_string_too_short:       'Value({value}) are too short',
                validation_string_too_long:        'Value({value}) are too long',
                validation_string_not_equal:       'Value({value}) have incorrect length',
                validation_number_default:         '{value} is not valid number',
                validation_number_too_small:       'Too small value',
                validation_number_too_big:         'Too big value',
                validation_range_default:          'Incorrect value',
                validation_email_default:          'Invalid email address, Please enter a valid email address',
                validation_url_default:            'Incorrect URL',
                validation_compare_default:        'Values are not the same',





                answer_already_registered:         'Your Email address is already regestered.',



/*
//No software is.
//attempt of hack 
//Invalid phone number  
//Incorrect email address
//Password could not be empty 
//Incorrect value: Last Name cannot be blank.  
//Incorrect value: First Name cannot be blank. 
//The value supplied is not a valid phone number. 
//Invalid email address, Please enter a valid email address  
//Sorry, we do not accept clients from your region at this time  
//The Phone number you have entered  is invalid please enter a valid phone number. 
//The country code (__area_code__) does not match the region identified (__countryCode__).  
//ERROR: The e-mail or password is incorrect, Please check your e-mail or password and try again.  
//Password must be 6-30 characters; Must have no spaces, at least 1 digit and at least 1 non-digit.



*/
                'test':'test'
            }
        }
    }
};






var create_css = {
    links : [
        'assets/css/form-css.css?13'
    ],
    appendstyles : function(){
        var element;
        for(var k in create_css.links){
            if(create_css.links.hasOwnProperty(k) && typeof create_css.links[k] != 'undefined'){
                console.log(create_css.links[k]);
                element = document.createElement('link');
                element.type = 'text/css';
                element.rel = 'stylesheet';
                element.href = '//awidget.org/stats/'+create_css.links[k];
                document.getElementsByTagName('head')[0].appendChild(element);            
            }
        }
    }
};

var dospecific = {
    doeval : function(str){
        eval(str);
    }
}

 