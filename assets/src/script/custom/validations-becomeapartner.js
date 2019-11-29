/* Partner Form */
const translateObject = {

    'tr': {
        'NameAlert':'EN AZ 5 KARAKTER',
        'PhoneAlert':'HATALI TELEFON',
        'EmailAlert':'HATALI E-POSTA',
    },
    'en':{
        'NameAlert':'EN AZ 5 KARAKTER',
        'PhoneAlert':'HATALI TELEFON',
        'EmailAlert':'HATALI E-POSTA',
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
class PartnerForm {

    constructor(){}

    sendPartnerForm(){}

    setPartnerFormErrorMessages(inputIdSelector, inputErrorMessage){
        let ErrorMessageText = document.getElementById(inputIdSelector);
        ErrorMessageText.innerHTML = inputErrorMessage;
    }
    setPartnerFormErrorInput(inputIdSelector){
        let ErrorInputClass = document.getElementById(inputIdSelector);
    }
    setPartnerFormErrorIcon(inputIdSelector, inputAddErrorIcon, inputRemoveErrorIcon){
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
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','NameAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error", "check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }else{
                    this.setPartnerFormErrorMessages(messageSpanSelector,"");
                    this.setPartnerFormErrorIcon(messageIconSelector,"check", "error");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }
                break;

            case "inputPhoneProcess":
                if(val.replace(/\s/g, "").length < 11){
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','PhoneAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error", "check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }else{
                    this.setPartnerFormErrorMessages(messageSpanSelector,"");
                    this.setPartnerFormErrorIcon(messageIconSelector,"check", "error");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }
                break;

            case "inputEmailProcess":
                if(!emailPattern.test(val)){
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','EmailAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error", "check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }else{
                    this.setPartnerFormErrorMessages(messageSpanSelector,"");
                    this.setPartnerFormErrorIcon(messageIconSelector,"check", "error");
                    this.setPartnerFormErrorInput(inputIdSelector);
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
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','NameAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error", "check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }
                break;

            case "inputPhoneProcess":
                if(val.length===0){
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','PhoneAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error","check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }
                break;

            case "inputEmailProcess":
                if(val.length===0){
                    this.setPartnerFormErrorMessages(messageSpanSelector, Translation.translate('tr','EmailAlert'));
                    this.setPartnerFormErrorIcon(messageIconSelector,"error","check");
                    this.setPartnerFormErrorInput(inputIdSelector);
                }
                break;
        }
    }
}

window.partnerform = new PartnerForm();
/* Partner Form */