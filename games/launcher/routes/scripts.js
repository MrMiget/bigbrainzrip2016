function pad(number, length)
{
    var str = '' + number;
    while (str.length < length) {
        str = '0' + str;
    }
    return str;
}
function get_color_string(progress, total) {
  if (progress === 0 || progress === " " || progress === "") {
    return "";
  }
  percent = (progress / total)*100;
  var red = 0;
  var green = 0;
  red = percent <= 50 ? 255 : Math.ceil(256 - (percent-50)*5.12);
  green = percent >= 50 ? 255 : Math.ceil((percent)*5.12);
  red_hex = pad(red.toString(16), 2);
  green_hex = pad(green.toString(16), 2);
  blue_hex = "00";
  color = red_hex+green_hex+blue_hex;
  return color;
}
function setShowAdditionAndSubtraction() {
	window.showAdditionAndSubtraction = true;
}

if (!Array.prototype.indexOf) {
    Array.prototype.indexOf = function (elt /*, from*/) {
        var len = this.length >>> 0;
        var from = Number(arguments[1]) || 0;
        from = (from < 0) ? Math.ceil(from) : Math.floor(from);
        if (from < 0) from += len;

        for (; from < len; from++) {
            if (from in this && this[from] === elt) return from;
        }
        return -1;
    };
}