const saveScoredBtn = document.querySelector('#saveScoredBtn');
const finalScore = document.querySelector('#finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');

finalScore.innerText = mostRecentScore;
