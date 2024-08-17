// Function to split text into two lines with a <br> tag
function splitTextIntoTwoLines() {
    var paragraphs = document.querySelectorAll('.two-lines');

    paragraphs.forEach(function(paragraph) {
        var text = paragraph.textContent.trim();
        var words = text.split(' ');
        var halfwayIndex = Math.ceil(words.length / 2);
        var firstHalf = words.slice(0, halfwayIndex).join(' ');
        var secondHalf = words.slice(halfwayIndex).join(' ');

        paragraph.innerHTML = firstHalf + "<br>" + secondHalf;
    });
}

// Call the function when the document is fully loaded
document.addEventListener('DOMContentLoaded', splitTextIntoTwoLines);