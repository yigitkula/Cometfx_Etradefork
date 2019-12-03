/* Partner Form */
const translateObject = {

    'tr': {
        'NameAlert':'MINIMUM 5 CHARACTERS',
        'PhoneAlert':'WRONG PHONE',
        'EmailAlert':'WRONG EMAIL',
        'MessageAlert':'MINIMUM 10 CHARACTERS',
        'MessageCharacterOutAlert':'MAXIMUM 2000 CHARACTERS'
    },
    'en':{
        'NameAlert':'MINIMUM 5 CHARACTERS',
        'PhoneAlert':'WRONG PHONE',
        'EmailAlert':'WRONG EMAIL',
        'MessageAlert':'MINIMUM 10 CHARACTERS',
        'MessageCharacterOutAlert':'MAXIMUM 2000 CHARACTERS'
    }
};

class Translation {
    static translate(language, translationKey){
        if(translateObject.hasOwnProperty(language)){

            if(translateObject[language].hasOwnProperty(translationKey)){
                return translateObject[language][translationKey];
            }
            return "";
        }
        return "";
    }
}
/* Translation */

/* Partner Form */
class ContactForm {

    constructor(){}

    sendContactForm(){}

    setContactFormErrorMessages(inputIdSelector, inputErrorMessage, inputAddErrorMessageClass, inputRemoveErrorMessageClass){
        let ErrorMessageText = document.getElementById(inputIdSelector);
        ErrorMessageText.innerHTML = inputErrorMessage;
        ErrorMessageText.classList.add(inputAddErrorMessageClass);
        ErrorMessageText.classList.remove(inputRemoveErrorMessageClass);
    }
    setContactFormErrorInput(inputIdSelector){
        let ErrorInputClass = document.getElementById(inputIdSelector);
    }
    setContactFormErrorIcon(inputIdSelector, inputAddErrorIcon, inputRemoveErrorIcon){
        let ErrorIconClass = document.getElementById(inputIdSelector);
        ErrorIconClass.classList.add(inputAddErrorIcon);
        ErrorIconClass.classList.remove(inputRemoveErrorIcon);
    }

    verifyContent(inputProcessName, inputIdSelector, messageSpanSelector, messageIconSelector){

        let phonePatternGsm = /^\(5\d{2}\)\s?\d{3}\s?\d{2}\s?\d{2}$/g; // GSM Phone Pattern
        let phonePatternAll = /^\(\d{3}\)\s?\d{3}\s?\d{2}\s?\d{2}$/g; // ALL Phone Pattern
        let emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        let inputSelectorTag = document.getElementById(inputIdSelector);
        let messageSpanSelectorTag = document.getElementById(messageSpanSelector);
        let messageIconSelectorTag = document.getElementById(messageIconSelector);

        let val = inputSelectorTag.value.trim();
        let checkbox = inputSelectorTag;

        switch (inputProcessName) {

            case "inputNameProcess":
                if(val.length < 5){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','NameAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else{
                    this.setContactFormErrorMessages(messageSpanSelector,"", "check", "error");
                    this.setContactFormErrorIcon(messageIconSelector,"check", "error");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputPhoneProcess":
                if(val.replace(/\s/g, "").length < 11){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','PhoneAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else{
                    this.setContactFormErrorMessages(messageSpanSelector,"", "check", "error");
                    this.setContactFormErrorIcon(messageIconSelector,"check", "error");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputEmailProcess":
                if(!emailPattern.test(val)){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','EmailAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else{
                    this.setContactFormErrorMessages(messageSpanSelector,"", "check", "error");
                    this.setContactFormErrorIcon(messageIconSelector,"check", "error");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputMessageProcess":
                if(val.length < 10){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','MessageAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else if(val.length >= 2000){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','MessageCharacterOutAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else{
                    this.setContactFormErrorMessages(messageSpanSelector,"", "check", "error");
                    this.setContactFormErrorIcon(messageIconSelector,"check", "error");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;
        }
    }

    verifyContentErrorDelete(inputProcessName, inputIdSelector, messageSpanSelector, messageIconSelector){

        let inputSelectorTag = document.getElementById(inputIdSelector);
        let messageSpanSelectorTag = document.getElementById(messageSpanSelector);
        let messageIconSelectorTag = document.getElementById(messageIconSelector);
        let val = inputSelectorTag.value.trim();
        let checkbox = inputSelectorTag;

        switch (inputProcessName) {

            case "inputNameProcess":
                if(val.length===0){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','NameAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error", "check");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputPhoneProcess":
                if(val.length===0){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','PhoneAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error","check");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputEmailProcess":
                if(val.length===0){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','EmailAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error","check");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;

            case "inputMessageProcess":
                if(val.length < 10){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','MessageAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error","check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else if(val.length >= 2000){
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr','MessageCharacterOutAlert'), "error", "check");
                    this.setContactFormErrorIcon(messageIconSelector,"error","check");
                    this.setContactFormErrorInput(inputIdSelector);
                }else{
                    this.setContactFormErrorMessages(messageSpanSelector, Translation.translate('tr',''), "check", "error");
                    this.setContactFormErrorIcon(messageIconSelector,"check","error");
                    this.setContactFormErrorInput(inputIdSelector);
                }
                break;
        }
    }
}

window.contactform = new ContactForm();
/* Partner Form */