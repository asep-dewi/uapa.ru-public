const handleThemeUpdate = (cssVars) => {
    const root = document.querySelector(':root');
    const keys = Object.keys(cssVars);
    keys.forEach(key => {
        root.style.setProperty(key, cssVars[key]);
    });
}

function dynamicPrimaryColor(primaryColor) {
    primaryColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName = `--primary-${e.target.getAttribute('data-id')}`;
            const cssPropName1 = `--primary-${e.target.getAttribute('data-id1')}`;
            const cssPropName2 = `--primary-${e.target.getAttribute('data-id2')}`;
            const cssPropName7 = `--primary-${e.target.getAttribute('data-id7')}`;
            handleThemeUpdate({
                [cssPropName]: e.target.value,
                // 95 is used as the opacity 0.95  
                [cssPropName1]: e.target.value + 95,
                [cssPropName2]: e.target.value,
                [cssPropName7]: e.target.value + 20,
            });
        });
    });
}

function dynamicPrimaryBackground(bgColor) {
    bgColor.forEach((item) => {
        item.addEventListener('input', (e) => {
            const cssPropName3 = `--dark-${e.target.getAttribute('data-id3')}`;
            const cssPropName4 = `--dark-${e.target.getAttribute('data-id4')}`;
            handleThemeUpdate({
                [cssPropName3]: e.target.value+ 'dd',
                [cssPropName4]: e.target.value,
            });
        });
    });
}

$(document).ready(function () {
    // Light theme color picker
    // const LightThemeSwitchers = document.querySelectorAll('.light-theme .switch_section span');
    const dynamicPrimaryLight = document.querySelectorAll('input.color-primary-light');
    const dynamicBackground = document.querySelectorAll('input.background-primary-light');

    // themeSwitch(LightThemeSwitchers);
    dynamicPrimaryColor(dynamicPrimaryLight);
    dynamicPrimaryBackground(dynamicBackground);

    localStorageBackup();
});

function localStorageBackup() {
    // if there is a value stored, update color picker and background color
    // Used to retrive the data from local storage
    if (localStorage.edomiprimaryColor) {
        // document.getElementById('colorID').value = localStorage.edomiprimaryColor;
        document.querySelector('html').style.setProperty('--primary-bg-color', localStorage.edomiprimaryColor);
        document.querySelector('html').style.setProperty('--primary-bg-hover', localStorage.edomiprimaryHoverColor);
        document.querySelector('html').style.setProperty('--primary-bg-border', localStorage.edomiprimaryBorderColor);
        document.querySelector('html').style.setProperty('--primary-bg-transparentcolor', localStorage.edomiprimaryTransparent);
    }
    if (localStorage.edomibgColor) {
        document.querySelector('body').classList.add('dark-theme');
        document.querySelector('body').classList.remove('light-theme');
        $('#myonoffswitch4').prop('checked', true);
        $('#myonoffswitch3').prop('checked', false);
        // document.getElementById('bgID').value = localStorage.edomibgColor;
        document.querySelector('html').style.setProperty('--dark-body', localStorage.edomibgColor);
        document.querySelector('html').style.setProperty('--dark-theme', localStorage.edomithemeColor);
    }

    if (localStorage.edomirtl) {
        $('body').addClass('rtl');
        $('#myonoffswitch2').prop('checked', true);
        $('#myonoffswitch1').prop('checked', false);
    }

    if (localStorage.edomidark) {
        $('body').addClass('dark-theme');
        $('#myonoffswitch4').prop('checked', true);
        $('#myonoffswitch3').prop('checked', false);
    }

    if(localStorage.edomilight){
        $('body').addClass('light-theme');
        $('#myonoffswitch3').prop('checked', true);
        $('#myonoffswitch4').prop('checked', false);
    }

}

// triggers on changing the color picker
function changePrimaryColor() {

    var userColor = document.getElementById('colorID').value;
    localStorage.setItem('edomiprimaryColor', userColor);
    // to store value as opacity 0.95 we use 95
    localStorage.setItem('edomiprimaryHoverColor', userColor + 95);
    localStorage.setItem('edomiprimaryBorderColor', userColor);
    localStorage.setItem('edomiprimaryTransparent', userColor + 20);
    names()
}
// triggers on changing the color picker
function changeBackgroundColor() {

    var userColor = document.getElementById('bgID').value;
    localStorage.setItem('edomibgColor', userColor + 'dd');
    localStorage.setItem('edomithemeColor', userColor);
    

    document.querySelector('body').classList.add('dark-theme');
    document.querySelector('body').classList.remove('light-theme');
    $('#myonoffswitch4').prop('checked', true);
    names()
}


// to check the value is hexa or not
const isValidHex = (hexValue) => /^#([A-Fa-f0-9]{3,4}){1,2}$/.test(hexValue)

const getChunksFromString = (st, chunkSize) => st.match(new RegExp(`.{${chunkSize}}`, "g"))
// convert hex value to 256
const convertHexUnitTo256 = (hexStr) => parseInt(hexStr.repeat(2 / hexStr.length), 16)
// get alpha value is equla to 1 if there was no value is asigned to alpha in function
const getAlphafloat = (a, alpha) => {
    if (typeof a !== "undefined") { return a / 255 }
    if ((typeof alpha != "number") || alpha < 0 || alpha > 1) {
        return 1
    }
    return alpha
}
// convertion of hex code to rgba code 
function hexToRgba(hexValue, alpha) {
    if (!isValidHex(hexValue)) { return null }
    const chunkSize = Math.floor((hexValue.length - 1) / 3)
    const hexArr = getChunksFromString(hexValue.slice(1), chunkSize)
    const [r, g, b, a] = hexArr.map(convertHexUnitTo256)
    return `rgba(${r}, ${g}, ${b}, ${getAlphafloat(a, alpha)})`
}


let myVarVal

function names() {

    let primaryColorVal = getComputedStyle(document.documentElement).getPropertyValue('--primary-bg-color').trim();

    //get variable
    myVarVal = localStorage.getItem("edomiprimaryColor") || primaryColorVal;

    // For index.html
	if(document.querySelector('#sales-status') !== null){
        sales();
    }

    // For index2.html
	if(document.querySelector('#sales-summary') !== null){
        salessummary();
    }

    // For index3.html
	if(document.querySelector('#purchase') !== null){
        purchase();
    }

    if(document.querySelector('#total-overview') !== null){
        totaloverview();
    }

    // For index4.html
	if(document.querySelector('#admission') !== null){
        admission();
    }

    if(document.querySelector('#browser') !== null){
        browser();
    }

    // For index5.html
	if(document.querySelector('#activity') !== null){
        activity();
    }

    if(document.querySelector('.viewers') !== null){
        viewers();
    }

    let colorData05 = hexToRgba(myVarVal || primaryColorVal, 0.05)
    document.querySelector('html').style.setProperty('--primary-05', colorData05);

    let colorData1 = hexToRgba(myVarVal || primaryColorVal, 0.1)
    document.querySelector('html').style.setProperty('--primary-1', colorData1);

    let colorData2 = hexToRgba(myVarVal || primaryColorVal, 0.2)
    document.querySelector('html').style.setProperty('--primary-2', colorData2);

    let colorData3 = hexToRgba(myVarVal || primaryColorVal, 0.3)
    document.querySelector('html').style.setProperty('--primary-3', colorData3);

    let colorData4 = hexToRgba(myVarVal || primaryColorVal, 0.4)
    document.querySelector('html').style.setProperty('--primary-4', colorData4);

    let colorData5 = hexToRgba(myVarVal || primaryColorVal, 0.5)
    document.querySelector('html').style.setProperty('--primary-5', colorData5);

    let colorData6 = hexToRgba(myVarVal || primaryColorVal, 0.6)
    document.querySelector('html').style.setProperty('--primary-6', colorData6);

    let colorData7 = hexToRgba(myVarVal || primaryColorVal, 0.7)
    document.querySelector('html').style.setProperty('--primary-7', colorData7);

    let colorData8 = hexToRgba(myVarVal || primaryColorVal, 0.8)
    document.querySelector('html').style.setProperty('--primary-8', colorData8);

    let colorData9 = hexToRgba(myVarVal || primaryColorVal, 0.9)
    document.querySelector('html').style.setProperty('--primary-9', colorData9);
}
names()
