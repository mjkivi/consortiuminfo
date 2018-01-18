// This file contains miscellaneous javascript functions that are used
// to validate user entered data.
var whitespace     = " \t\n\r";
var defaultEmptyOK = false

// This function checks if the given string is empty
function isEmpty(s)
{
   return ((s == null) || (s.length == 0))
}
// This function checks if the given string is empty
function isMMNValid(s,charString)
{
    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        for (j = 0; j < charString.length; j++) {
            var invalidChar = charString.charAt(j);
            if(c == invalidChar){
                return false;
            }
        }
    }
    return true;
}
// This function displays a warning message
function warnInvalid (theField, s)
{   theField.focus()
    theField.select()
    alert(s)
    return false
}
// This function displays a warning message that a field can not
// be empty and the use must enter data for that field.
function warnEmpty (theField, s)
{   theField.focus()
    alert(s)
    return false
}
// This function checks if the given character is a digit.
function isDigit (c)
{
   return ((c >= "0") && (c <= "9"))
}
// This function checks if the given character is an alphabet
function isLetter (c)
{   return ( ((c >= "a") && (c <= "z")) || ((c >= "A") && (c <= "Z")) )
}
// This function checks if the given string is an integer
function isInteger (s)
{   var i;
    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if (!isDigit(c)) return false;
    }
    return true;
}
// This function checks if the given string contains any whitespace
function isWhitespace (s)
{   var i;
    if (isEmpty(s)) return true;
    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if (whitespace.indexOf(c) == -1) {
           return false;
        }
    }
    return true;
}
// This function checks if the given string contains only aphanumeric
// characters.
function isAlphanumeric (s)
{
    var i;
    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i);
        if (! (isLetter(c) || isDigit(c) ) )
        return false;
    }
    return true;
}

function convertCharactersToDigits (s)
{

    var i;
    var changedString ="";
    var tempString = s.toUpperCase();
    for (i = 0; i < s.length; i++) {
        var c = tempString.charAt(i);
        if ( isLetter(c) ){
            c = getEquivalentNumber(c);
            changedString = tempString.substring(0,i)+c+tempString.substring(i+1);
            tempString = changedString;
        }
    }
    if(changedString == ""){
        changedString = tempString;
    }
    //alert("changedString"+changedString);
    return changedString;
}
// Added to right trim the string passed  -- Anuradha
function rtrim ( s ){
  return s.replace( /\s+$/, "" );
}

function getEquivalentNumber(c){
    var returnChar = "";
    if(c == "A" || c == "B" || c == "C"){
        returnChar = "2";
    }else if(c == "D" || c == "E" || c == "F"){
        returnChar =  "3";
    }else if(c == "G" || c == "H" || c == "I"){
        returnChar =  "4";
    }else if(c == "J" || c == "K" || c == "L"){
        returnChar =  "5";
    }else if(c == "M" || c == "N" || c == "O"){
        returnChar =  "6";
    }else if(c == "P" || c == "Q" || c == "R" || c == "S"){
        returnChar =  "7";
    }else if(c == "T" || c == "U" || c == "V"){
        returnChar =  "8";
    }else if(c == "W" || c == "X" || c == "Y" || c == "Z"){
        returnChar =  "9";
    }
    return returnChar;
}
