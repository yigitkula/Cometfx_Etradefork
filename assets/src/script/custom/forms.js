class FormValidators{
    constructor(){}


    _fullNameInvalid(){
        document.getElementById('iconNameId').classList.add("error");
        document.getElementById('iconNameId').classList.remove("check");
        document.getElementById('msgNameId').innerText = "MINIMUM 5 CHARACTERS";
        document.getElementById('msgNameId').classList.add("error");
        document.getElementById('msgNameId').classList.remove("check");
    }

    _fullNameValid(){
        document.getElementById('inputNameId').classList.add("check");
        document.getElementById('iconNameId').classList.remove("error");
        document.getElementById('msgNameId').innerText = "";
        document.getElementById('msgNameId').classList.add("check");
        document.getElementById('msgNameId').classList.remove("error");
    }

    _emailInvalid(){
        document.getElementById('iconEmailId').classList.add("error");
        document.getElementById('iconEmailId').classList.remove("check");
        document.getElementById('msgEmailId').innerText = "WRONG EMAIL";
        document.getElementById('msgEmailId').classList.add("error");
        document.getElementById('msgEmailId').classList.remove("check");
    }

    _emailValid(){
        document.getElementById('iconEmailId').classList.add("check");
        document.getElementById('iconEmailId').classList.remove("error");
        document.getElementById('msgEmailId').innerText = "";
        document.getElementById('msgEmailId').classList.add("check");
        document.getElementById('msgEmailId').classList.remove("error");
    }

    _phoneInvalid(){
        document.getElementById('iconPhoneId').classList.add("error");
        document.getElementById('iconPhoneId').classList.remove("check");
        document.getElementById('msgPhoneId').innerText = "WRONG PHONE";
        document.getElementById('msgPhoneId').classList.add("error");
        document.getElementById('msgPhoneId').classList.remove("check");
    }

    _phoneValid(){
        document.getElementById('iconPhoneId').classList.add("check");
        document.getElementById('iconPhoneId').classList.remove("error");
        document.getElementById('msgPhoneId').innerText = "";
        document.getElementById('msgPhoneId').classList.add("check");
        document.getElementById('msgPhoneId').classList.remove("error");
    }

    _messageInvalid(errorMsg){
        document.getElementById('iconMessageId').classList.add("error");
        document.getElementById('iconMessageId').classList.remove("check");
        document.getElementById('msgMessageId').innerText = errorMsg;
        document.getElementById('msgMessageId').classList.add("error");
        document.getElementById('msgMessageId').classList.remove("check");
    }

    _messageValid(){
        document.getElementById('inputMessageId').classList.add("check");
        document.getElementById('iconMessageId').classList.remove("error");
        document.getElementById('msgMessageId').innerText = "";
        document.getElementById('msgMessageId').classList.add("check");
        document.getElementById('msgMessageId').classList.remove("error");
    }

    _verifyFullname(){
        if(document.getElementById('inputNameId').value.length < 5){
            this._fullNameInvalid();
            return false;
        } else {
            this._fullNameValid();
            return true;
        }
        return true;
    }

    _verifyEmail(){
        var emailPattern	= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!document.getElementById('inputEmailId').value.match(emailPattern)){
            this._emailInvalid();
            return false;
        } else {
            this._emailValid();
            return true;
        }
        return true;
    }

    _verifyPhone(){
        if(document.getElementById('inputPhoneId').value.replace(/\s/g, "").length < 11){
            this._phoneInvalid();
            return false;
        } else {
            this._phoneValid();
            return true;
        }
        return true;
    }

    _verifyMessage(){
        if(document.getElementById('inputMessageId').value.length < 10){
            this._messageInvalid("MINIMUM 10 CHARACTERS");
            return false;
        } else if(document.getElementById('inputMessageId').value.length >= 2000){
            this._messageInvalid("MAXIMUM 2000 CHARACTERS");
            return false;
        } else {
            this._messageValid();
            return true;
        }
        return true;
    }

    _verifyTerms(){
        return true;
        var termsOfUseCheck	= document.getElementById('termsOfUseCheck').checked;

        if(!termsOfUseCheck){
            document.getElementById('labeltermsOfUseCheck').classList.add("checkederror");
            document.getElementById('labeltermsOfUseCheck').classList.remove("checkedcheck");
            return false;
        } else {
            document.getElementById('labeltermsOfUseCheck').classList.add("checkedcheck");
            document.getElementById('labeltermsOfUseCheck').classList.remove("checkederror");
            return true;
        }
        return true;
    }

    _ajaxCall(type){
        var self = this;
        var buttonTitle = $('button[type="submit"]').html();
        console.log(buttonTitle);
        $('button[type="submit"]').html('SENDING');
        console.log("Ajax Call:", type);
        
        
        var formData = {
            type: type,
            full_name: document.getElementById('inputNameId').value,
            email: document.getElementById('inputEmailId').value,
            phone: document.getElementById('inputPhoneId').value
        };  

        if(document.getElementById('inputMessageId')){
            formData.message = document.getElementById('inputMessageId').value;
        }

        if(document.getElementById('g-recaptcha-response')){
            formData.captcharesponse = document.getElementById('g-recaptcha-response').value;
        }
        
        $.post( "/send_mail", formData)
            .done(function( data ) {
                $('button[type="submit"]').html(buttonTitle);
                console.log(data);
                if(!data.success){
                    switch(data.error_code){
                        case 1000:
                        case 1001:
                        case 1002:
                            alert("Mesajınız gönderilemedi. Lütfen daha sonra tekrar deneyin"); 
                            break;

                        case 1003: self._fullNameInvalid(); break;
                        case 1004: self._emailInvalid();    break;
                        case 1005: self._phoneInvalid();    break;
                        case 1006: self._messageInvalid();  break;
                    }
                    return;
                }

                switch(type){
                    case 'instruments':
                        window.location.href = '/instruments-seefull-thank';
                        break;
                    case 'contact':
                        window.location.href = '/contact-us-thank';
                        break;
                    case 'partner':
                        window.location.href = '/become-a-partner-thank';
                        break;
                    case 'meta':
                    case 'pro':
                        window.location.href = '/platforms-thank';
                        break;
                }
            });
        
        
    }

    verifyContactForm(){
        if (!this._verifyFullname() || !this._verifyEmail() || !this._verifyPhone() || !this._verifyMessage() || !this._verifyTerms()){
            console.log("HATA");
            return false;
        } else {
            console.log("DOGRU");
            this._ajaxCall('contact');
            return false;
        }
    }

    verifyMetaForm(){
        if (!this._verifyFullname() || !this._verifyEmail() || !this._verifyPhone() || !this._verifyTerms()){
            console.log("HATA");
            return false;
        } else {
            this._ajaxCall('meta');
            return false;
        }
    }

    verifyProForm(){
        if (!this._verifyFullname() || !this._verifyEmail() || !this._verifyPhone() || !this._verifyTerms()){
            console.log("HATA");
            return false;
        } else {
            console.log("DOGRU");
            this._ajaxCall('pro');
            return false;
        }
    }

    verifyPartnerForm(){
        debugger;
        if (!this._verifyFullname() || !this._verifyEmail() || !this._verifyPhone() || !this._verifyTerms()){
            console.log("HATA");
            return false;
        } else {
            console.log("DOGRU");
            this._ajaxCall('partner');
            return false;
        }
    }

    verifyInstrumentsForm(){
        if (!this._verifyFullname() || !this._verifyEmail() || !this._verifyPhone() || !this._verifyTerms()){
            console.log("HATA");
            return false;
        } else {
            console.log("DOGRU");
            this._ajaxCall('instruments');
            return false;
        }
    }
}

window.formValidator = new FormValidators();