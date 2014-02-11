/*
 * validate.js 1.2.1
 * Copyright (c) 2012 Rick Harrison, http://rickharrison.me
 * validate.js is open sourced under the MIT license.
 * Portions of validate.js are inspired by CodeIgniter.
 * http://rickharrison.github.com/validate.js
 */

(function(h,o,g){var j={messages:{required:"The %s field is required.",matches:"The %s field does not match the %s field.",valid_email:"The %s field must contain a valid email address.",valid_emails:"The %s field must contain all valid email addresses.",min_length:"The %s field must be at least %s characters in length.",max_length:"The %s field must not exceed %s characters in length.",exact_length:"The %s field must be exactly %s characters in length.",greater_than:"The %s field must contain a number greater than %s.",less_than:"The %s field must contain a number less than %s.",alpha:"The %s field must only contain alphabetical characters.",alpha_numeric:"The %s field must only contain alpha-numeric characters.",alpha_dash:"The %s field must only contain alpha-numeric characters, underscores, and dashes.",numeric:"The %s field must contain only numbers.",integer:"The %s field must contain an integer.",decimal:"The %s field must contain a decimal number.",is_natural:"The %s field must contain only positive numbers.",is_natural_no_zero:"The %s field must contain a number greater than zero.",valid_ip:"The %s field must contain a valid IP.",valid_base64:"The %s field must contain a base64 string.",valid_credit_card:"The %s field must contain a vaild credit card number",is_file_type:"The %s field must contain only %s files.",valid_url:"The %s field must contain a valid URL."},callback:function(u){}};var m=/^(.+?)\[(.+)\]$/,c=/^[0-9]+$/,a=/^\-?[0-9]+$/,t=/^\-?[0-9]*\.?[0-9]+$/,n=/^[a-zA-Z0-9.!#$%&amp;'*+\-\/=?\^_`{|}~\-]+@[a-zA-Z0-9\-]+(?:\.[a-zA-Z0-9\-]+)*$/,b=/^[a-z]+$/i,l=/^[a-z0-9]+$/i,p=/^[a-z0-9_\-]+$/i,q=/^[0-9]+$/i,k=/^[1-9][0-9]*$/i,s=/^((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})$/i,i=/[^a-zA-Z0-9\/\+=]/i,f=/^[\d\-\s]+$/,d=/^((http|https):\/\/(\w+:{0,1}\w*@)?(\S+)|)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?$/;var r=function(x,u,A){this.callback=A||j.callback;this.errors=[];this.fields={};this.form=o.forms[x]||{};this.messages={};this.handlers={};for(var w=0,z=u.length;w<z;w++){var y=u[w];if(!y.name||!y.rules){continue}this.fields[y.name]={name:y.name,display:y.display||y.name,rules:y.rules,id:null,type:null,value:null,checked:null}}var v=this.form.onsubmit;this.form.onsubmit=(function(B){return function(C){try{return B._validateForm(C)&&(v===g||v())}catch(D){}}})(this)},e=function(w,u){var v;if((w.length>0)&&(w[0].type==="radio")){for(v=0;v<w.length;v++){if(w[v].checked){return w[v][u]}}return}return w[u]};r.prototype.setMessage=function(v,u){this.messages[v]=u;return this};r.prototype.registerCallback=function(u,v){if(u&&typeof u==="string"&&v&&typeof v==="function"){this.handlers[u]=v}return this};r.prototype._validateForm=function(w){this.errors=[];for(var v in this.fields){if(this.fields.hasOwnProperty(v)){var x=this.fields[v]||{},u=this.form[x.name];if(u&&u!==g){x.id=e(u,"id");x.type=(u.length>0)?u[0].type:u.type;x.value=e(u,"value");x.checked=e(u,"checked");this._validateField(x)}}}if(typeof this.callback==="function"){this.callback(this.errors,w)}if(this.errors.length>0){if(w&&w.preventDefault){w.preventDefault()}else{return false}}return true};r.prototype._validateField=function(B){var C=B.rules.split("|");if(B.rules.indexOf("required")===-1&&(!B.value||B.value===""||B.value===g)){return}for(var z=0,w=C.length;z<w;z++){var v=C[z],x=null,A=false,y=m.exec(v);if(y){v=y[1];x=y[2]}if(typeof this._hooks[v]==="function"){if(!this._hooks[v].apply(this,[B,x])){A=true}}else{if(v.substring(0,9)==="callback_"){v=v.substring(9,v.length);if(typeof this.handlers[v]==="function"){if(this.handlers[v].apply(this,[B.value])===false){A=true}}}}if(A){var u=this.messages[v]||j.messages[v],D="An error has occurred with the "+B.display+" field.";if(u){D=u.replace("%s",B.display);if(x){D=D.replace("%s",(this.fields[x])?this.fields[x].display:x)}}this.errors.push({id:B.id,name:B.name,message:D,rule:v});break}}};r.prototype._hooks={required:function(v){var u=v.value;if((v.type==="checkbox")||(v.type==="radio")){return(v.checked===true)}return(u!==null&&u!=="")},matches:function(w,v){var u=this.form[v];if(u){return w.value===u.value}return false},valid_email:function(u){return n.test(u.value)},valid_emails:function(w){var u=w.value.split(",");for(var v=0;v<u.length;v++){if(!n.test(u[v])){return false}}return true},min_length:function(v,u){if(!c.test(u)){return false}return(v.value.length>=parseInt(u,10))},max_length:function(v,u){if(!c.test(u)){return false}return(v.value.length<=parseInt(u,10))},exact_length:function(v,u){if(!c.test(u)){return false}return(v.value.length===parseInt(u,10))},greater_than:function(u,v){if(!t.test(u.value)){return false}return(parseFloat(u.value)>parseFloat(v))},less_than:function(u,v){if(!t.test(u.value)){return false}return(parseFloat(u.value)<parseFloat(v))},alpha:function(u){return(b.test(u.value))},alpha_numeric:function(u){return(l.test(u.value))},alpha_dash:function(u){return(p.test(u.value))},numeric:function(u){return(t.test(u.value))},integer:function(u){return(a.test(u.value))},decimal:function(u){return(t.test(u.value))},is_natural:function(u){return(q.test(u.value))},is_natural_no_zero:function(u){return(k.test(u.value))},valid_ip:function(u){return(s.test(u.value))},valid_base64:function(u){return(i.test(u.value))},valid_url:function(u){return(d.test(u.value))},valid_credit_card:function(y){if(!f.test(y.value)){return false}var z=0,x=0,u=false;var v=y.value.replace(/\D/g,"");for(var A=v.length-1;A>=0;A--){var w=v.charAt(A);x=parseInt(w,10);if(u){if((x*=2)>9){x-=9}}z+=x;u=!u}return(z%10)===0},is_file_type:function(z,x){if(z.type!=="file"){return true}var w=z.value.substr((z.value.lastIndexOf(".")+1)),A=x.split(","),y=false,v=0,u=A.length;for(v;v<u;v++){if(w==A[v]){y=true}}return y}};h.FormValidator=r})(window,document);