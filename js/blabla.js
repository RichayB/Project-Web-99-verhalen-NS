/*jslint browser: true, devel: true, eqeq: true, plusplus: true, sloppy: true, vars: true, white: true*/

/*eslint-env browser*/

/*eslint 'no-console': 0*/

function storyArticle(storyHeader, storyTitle, storyIntro, storyLikes, storyComments, storyDuration) {
    this.storyHeader = storyHeader;
    this.storyTitle = storyTitle;
    this.storyIntro = storyIntro;
    this.storyLikes = storyLikes;
    this.storyComments = storyComments;
    this.storyDuration = storyDuration;
}

//Alzheimer story
var alzheimerStory = new storyArticle(
    'alzheimer.jpg', 
    'Alzheimer', 
    'Intro tekst.', 
    1, 2, 3);

//Kamervragen story
var kamervragenStory = new storyArticle(
    'conference.jpg', 
    'Kamervragen van Richard de Mos', 
    'Intro tekst.', 
    1, 2, 3);

//De Cock story
var cockStory = new storyArticle(
    'book.jpg', 
    'De Cock en het raadsel van het verdwenen boek', 
    'Intro tekst.', 
    1, 2, 3);

//Presentator story
var presentatorStory = new storyArticle(
    'presenter.jpg', 
    'Presentator die ten onrechte denkt aansluiting te hebben gevonden bij "de kids"', 
    'Intro tekst.', 
    1, 2, 3);

//Charlie Sheen story
var charlieStory = new storyArticle(
    'charlie.jpg', 
    'Charlie Sheen', 
    'Intro tekst.', 
    1, 2, 3);

//Song story
var songStory = new storyArticle(
    'search.jpg', 
    'Song (Je vindt nooit wat je zoekt)', 
    'Intro tekst.', 
    1, 2, 3);

//Filter button
var filterButton = document.querySelector('#filter_button');

//Filter button on click
filterButton.onclick = document.querySelector('body').appendChild(filterOptions);

//Filter options
var filterOptions = document.createElement('section');
filterOptions.classname = 'filter_options';

