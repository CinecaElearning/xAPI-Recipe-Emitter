## Installation and Upgrading
You'll need to install [Composer](https://getcomposer.org/) first.

- Install with `composer require learninglocker/xapi-recipe-emitter`.
- Update with `composer update learninglocker/xapi-recipe-emitter`.


## Supported Events
Mapping for recipe names to recipe classes can be found in the [Controller](../src/Controller.php).

Recipe Name | Recipe Class | Test | Example
--- | --- | --- | ---
course_viewed | [CourseViewed](../src/Events/CourseViewed.php) | [CourseViewedTest](../tests/CourseViewedTest.php) | [CourseViewed](examples/CourseViewed.json)
module_viewed | [ModuleViewed](../src/Events/ModuleViewed.php) | [ModuleViewedTest](../tests/ModuleViewedTest.php) | [ModuleViewed](examples/ModuleViewed.json)
attempt_started | [AttemptStarted](../src/Events/AttemptStarted.php) | [AttemptStartedTest](../tests/AttemptStartedTest.php) | [AttemptStarted](examples/AttemptStarted.json)
attempt_completed | [AttemptCompleted](../src/Events/AttemptCompleted.php) | [AttemptCompletedTest](../tests/AttemptCompletedTest.php) | [AttemptCompleted](examples/AttemptCompleted.json)
user_loggedin | [UserLoggedin](../src/Events/UserLoggedin.php) | [UserLoggedinTest](../tests/UserLoggedinTest.php) | [UserLoggedin](examples/UserLoggedin.json)
user_loggedout | [UserLoggedout](../src/Events/UserLoggedout.php) | [UserLoggedoutTest](../tests/UserLoggedoutTest.php) | [UserLoggedout](examples/UserLoggedout.json)
assignment_graded | [AssignmentGraded](../src/Events/AssignmentGraded.php) | [AssignmentGradedTest](../tests/AssignmentGradedTest.php) | [AssignmentGraded](examples/AssignmentGraded.json)
assignment_submitted | [AssignmentSubmitted](../src/Events/AssignmentSubmitted.php) | [AssignmentSubmittedTest](../tests/AssignmentSubmittedTest.php) | [AssignmentSubmitted](examples/AssignmentSubmitted.json)
discussion_viewed | [DiscussionViewed](../src/Events/DiscussionViewed.php) | [DiscussionViewedTest](../tests/DiscussionViewedTest.php) | [DiscussionViewed](examples/DiscussionViewed.json)
enrolment_created | [EnrolmentCreated](../src/Events/EnrolmentCreated.php) | [EnrolmentCreatedTest](../tests/EnrolmentCreatedTest.php) | [EnrolmentCreated](examples/EnrolmentCreated.json)

## Adding Events
To add an event create a new file in the "src/Events/" directory. You can then use  [ModuleViewed](../src/Events/ModuleViewed.php) as an example of what you're new file should look like. You will also need to change the [src/Controller.php file](../src/Controller.php) to map the recipe name to your new recipe class (event). Once you're happy with what you've done you'll need to create a pull request so that everyone else can use your new recipe class.

### First Pull Request
If this is your first pull request, you need to follow the steps below.

1. Click the "Fork" button (top right of Github). Github will fork (copy) this repository as your own so you can make changes.
2. Run `git remote set-url origin https://github.com/YOUR_USERNAME/xAPI-Recipe-Emitter.git` (replacing `YOUR_USERNAME` for your Github username).

Once this is done, you can then follow the steps for [subsequent pull requests](#subsequent-pull-requests) below.

### Subsequent Pull Requests
1. Run `git add -A; git commit -am "DESCRIPTION";` to commit your changes (replacing `DESCRIPTION` with a description of what you've changed).
2. Run `git push` to push your commits to your forked repository.
3. Go to "https://github.com/YOUR_USERNAME/xAPI-Recipe-Emitter/pulls" (replacing `YOUR_USERNAME` for your Github username).
4. Click the "New pull request" button to begin creating your pull request.
5. Click the "Create pull request" button (twice) to confirm the creation of your pull request.

Once step 5 is complete, we'll test and review your pull request before merging it with the rest of the code.
