# User Experience Testing

<!--- Craig --->

## Craig

### Site navigation

* Could i find the page? Was it easy? was the path user/projects/e4p?
    * Very easy to find. It's right in the header.
* Is the index page clear for a first-time visitor? Are the links clear?
    * It's kind of clear. If someone hasn't heard of E4P, I'm not sure that a gigantic header "Check out my Exercises for Programmers!" would mean anything to them. A sentence of context could go a long way. The interface is simple - one button for each exercise - but the buttons break when you squish the page. the anchor tags need to be display block or should be buttons maybe.

### Form analysis - Simple math calculator

* How is the storytelling? Is it clear what the forms are supposed to do?
    * it's not clear what the form does. "Simple Math" and the input of 2 numbers tells me something simple is going to happen, but i'm not sure what. Give me some more instructions, including what the constraints are.
* Are the inputs and buttons legible? Do they have labels?
    * Yep.
* Does the form work? Can you break it?
    * It works, but there's no validation to tell me i can't do stuff. i tried to paste in an emoji and type in a hash, and the UI didn't give me any feedback. And then I can submit 2 empty strings, and the results just show blank and idk why
* Do things jump around when you interact with them?
    * Nope - looks great.
* Is the outcome clear?
    * It could use some number formatting, but overall yes. It doesn't look great when second number < 0. you get "Addition: 50 + - 20 = 30; Subtraction: 50 - -20 = 70;". Large numbers could use commas, decimals could use some rounding.
* Do the form styles match across all forms?
    * Nope
* Is it a pleasure to use?
    * Pretty easy to use. It would be more pleasurable to use if there was more feedback
* What could be improved?
    * Styling and feedback

<!--- Joseph --->

## Joseph

### Site navigation

* Could i find the page? Was it easy? was the path user/projects/e4p?
    * Not clear where it is. The homepage is just a list of links.
* Is the index page clear for a first-time visitor? Are the links clear?
    * The links are clear, but the content is not. subgrouping the links on the homepage would do a lot, and just a quick sentence for each bullet

### Form analysis - Retirement Calculator

* How is the storytelling? Is it clear what the forms are supposed to do?
    * It's pretty simple and intuitive.
* Are the inputs and buttons legible? Do they have labels?
    * Yep
* Does the form work? Can you break it?
    * I get the wrong answer if i enter the same number for both fields. If i put in 83 and 83, it says "you can't retire in the past". The logic is missing a separate case for difference = 0
    * There's no maximum, so I was able to enter 88e88 and 99e99 and my retirement year was 9.899999999912E+100
* Do things jump around when you interact with them?
    * No
* Is the outcome clear?
    * Yes
* Do the form styles match across all forms?
    * No
* Is it a pleasure to use?
    * The whole site is really slow for some reason. All of the pages take a couple of seconds to load. I compare to Craig's just to make sure it wasn't my internet.
    * The language isn't very fun or encouraging. It doesn't have much personality.
* What could be improved?
    * Making it more fun to read & look at; making the output copy more fun.

<!--- Max --->

## Max

### Site navigation

* Could i find the page? Was it easy? was the path user/projects/e4p?
    * Projects --> Forms. it was the only thing on the forms page. but the path isn't right. maxs/projects contains the forms, but then forms are at maxs/forms, but they should probably be maxs/projects/forms 
* Is the index page clear for a first-time visitor? Are the links clear?
    * There are 5 words on the index page. One word header "Forms", and two bullets with links to the projects. Retirement is spelled incorrectly. You can probably infer what's going on, but it doesn't give any details about who should use these or how much detail they go into.

### Form analysis - Retirement calculator

* How is the storytelling? Is it clear what the forms are supposed to do?
    * It's pretty barebones. There's no context, and it's not clear what the output is supposed to be.
* Are the inputs and buttons legible? Do they have labels?
    * Yes
* Does the form work? Can you break it?
    * The form is only built for the case where you want to retire in the future. It doesn't handle current age = retirement age, or current age > retirement age. The copy makes no sense in those cases.
* Do things jump around when you interact with them?
    * No
* Is the outcome clear?
    * Yes, but there's too much copy. You could cut out the inputs and make the "years left to retire" and "retire in 20XX" sentence flow better
* Do the form styles match across all forms?
    * Yes - there's no styling
* Is it a pleasure to use?
    * Not really. The copy doesn't have any personality, and the styling is lacking. It feels very robotic. A good example of this is if you enter 0 and 0. Here's the output:
	What is your current age? 0

	At what age would you like to retire? 0

	You have 0 years left until you can retire.

	It's 2023 so you can retire in 2023

* What could be improved?
    * Styling, logic & feedback, personality, context

<!--- Paul --->

## Paul

### Site navigation

* Could i find the page? Was it easy? was the path user/projects/e4p?
    * It was a little confusing because the page is a folder on the server. Once i found the actual homepage - paul/my-website - the links didn't work. I found a page called php that linked to paul/my-website/php-fun.php. There's a section called "Simple Form", which contains a mad lib i think? and a url. When you copy and paste the url, it's a PE lesson - not a form.

* Is the index page clear for a first-time visitor? Are the links clear?
    * There is no index page.

### Form analysis

* How is the storytelling? Is it clear what the forms are supposed to do?
    * There is no storytelling. It is not clear what the forms are supposed to do. One sentence and a better title would go a long way.
* Are the inputs and buttons legible? Do they have labels?
    * The inputs are labeled, but it's not clear that "Number of Drinks" is the total available to split between guests. I thought it was how many drinks each guest wants.
* Does the form work? Can you break it?
    * The page doesn't make sense if you enter more guests than drinks. It should give feedback like "hey go buy more stuff" instead of saying "Each guest can have 0.03 drinks."
* Do things jump around when you interact with them?
    * The whole form gets pushed down, because the output is at the top of the page.
* Is the outcome clear?
    * No, it needs a better description that there are a limited number of drinks.