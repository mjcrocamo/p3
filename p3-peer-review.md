## P3 Peer Review

+ Reviewer's name: Maggie Crocamo
+ Reviewee's name: Michaela Deforest
+ URL to Reviewee's P3 Github Repo URL: *<https://github.com/mdeforest/p3>*

## 1. Interface

+ My initial impression of the sites interface was that it looks very professional. It looks like an official site to help build a users resume. 
+ The only part of the interface I think could be a little bit better is if each part (add job, add education etc), were not as far apart as they were. There was a lot of scrolling to do and it was hard to be sure if there was always something more to fill out.
+ There were many parts of the interface that worked well. The parts which added information before submitting the form, as well as the reactive css when clicking buttons. I also liked the final piece which produced a working resume that was very professional. 

## 2. Functional testing

For user testing, the below is what I tried:
+ I submitted the form without filling out any fields. This gave the desired outcome where the required fields showed error messages that needed to be fixed
+ I submitted the form with only some information. This gave the desired output which showed what needed to be filled in (required fields)
+ I submitted the form with bad information (no @ symbol in email fields and letters in the phone number fields). Even though these were usually not required fields, I still got the desired outcome as it stopped form submission and told me what I needed to change. It also left my old information in the form so I knew what needed to be changed from last time. 
+ I also tried to go to random routes and I got a 404 error page which is correct. I also tried to hit the /resume route manually and I got the expected 500 error page. 

## 3. Code: Routes

Their routes file was completely correct. They only had three routes that referenced the controllers they were using. 

## 4. Code: Views

+ Template inheritance is used. There's a master layout file and two other view files which extend the master layout file. 
+ There were some separation of concerns issues. There's some javascript in the html part of the view files which should really all be in a separate JS file. You can always grab elements from the DOM you need using JS and don't need to put any JS functions in the HTML
+ Everything with blade was done very well
+ They did use blade techniques that I didn't use in my own project but I was familiar with them

## 5. Code: General

+ The PHP code style looks to be consistent with the course notes.
+ I think best practices that we discussed in class were followed.
+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ I think the code was well commented. More steps could have been commented in the main controller method and some of the JS methods.
+ Parts of the code that were interesting were the Xpath query PHP code in the controller method create-resume. They looked up how to do something useful and used it in their app which I think is very cool.
+ The code is straight forward. It was a little hard to follow sometimes when JS functions were called in the HTML views themselves.

## 6. Misc
None that I can think of