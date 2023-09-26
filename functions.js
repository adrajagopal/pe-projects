//Format # with commas & 2 decimal places

function formatNumberWithCommasAndTwoDecimals(number) {
	number.toLocaleString('en-US', {maximumFractionDigits:2});
}

function StringToNumber(string) {
	return Number(string);
}

function StringToPercent(string) {
	return (Number(string)/100).toLocaleString('en-US', {style: 'percent'});
}