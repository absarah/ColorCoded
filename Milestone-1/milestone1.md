# TEAM NAME - Milestone 1

## Pages
- [x] Home
  - [x] Modern Design
  - [x] Basic welcome information
  - [x] Useful links to get to the other pages on the site
    - [x] Home
    - [x] About
    - [x] Color Coordinator
- [x] About
  - [x] Team member names
  - [x] Brief biography of each team member
  - [x] Picture or avatar for each team member
- [ ] Color Coordinator
  - [ ] See Requirements below

### Color Coordinate Generation
- [x] `GET`
  - [x] URL parameters asking for user input:
    - [x] rows/columns restrictions: `1 <= x <=26`
    - [x] number of colors: `1 <= x <= 10`
  - [x] validate user input
    - [x] If invalid: return the user to the form with meaningful error messages
- Successful validation:
  - [x] pass the parameters `(int rows/columns, int colors)` to the **SAME** controller/action
  - [ ] validate the parameters
    - [ ] if valid:
      - [x] return two tables
      - [ ] have a 'print' button
    - [x] if invalid: render the form with error messages

#### Table requirements:
- [x] Table 1 (upper table):
  - [x] 2 col by `x` row (`x` = numColors param)
  - [x] no header row
  - [x] spans most of the width of the page
  - [x] right column: 80% table width
  - [x] left column
     - [x] 20% table width
     - [x] each cell is a drop-down with 10 color names (these should be ordered in an intuitive way for the user)
        - [ ] each cell has a different default set color
           - [ ] 1. red
           - [ ] 2. orange
           - [ ] 3. yellow
           - [ ] 4. green
           - [ ] 5. teal
           - [ ] 6. blue
           - [ ] 7. purple
           - [ ] 8. brown
           - [ ] 9. grey
           - [ ] 10. black
         - [x] No two drop-downs can select the same color at the same time. If this happens:
           - [x] revert the most recently changed drop-down to the previous value selected
           - [x] inform the user in a non-intrusive way (ie not an `alert()`)
- [x] Table 2 (lower table):
  - [x] (`n` + 1) by (`n` + 1) (`n` = row/column param)
    - **This table should always be square**
  - [x] upper leftmost cell is empty
  - [x] top row:
    - [x] leftmost cell is empty
    - [x] remaining cells accross the top are lettered with capital letters in alphabetical order from A - Z.
      - `Z` is used for the max size of 26
  - [x] leftmost column:
    - [x] top cell is empty
    - [x] remaining cells going down are numbered in order from 1 - 26


### Pressing the print button
- [ ] Takes the user to a "printable view" of the resulting tables.
- [ ] Keep the same table dimensions and easily print on one page (8.5" x 11") in portrait mode.
  - [ ] Render in greyscale
  - [ ] Header: greyscale logo and company name
  - [ ] drop downs --> selected color names as plain text

**Note: This page will not use the common view layout as the rest of the site.**


## Fuel PHP Framework
- [ ] Every page, except the print view, should use the same layout and be managed in a central location (ie, if there's a typo, you only have to change it in one place).
- [ ] Each team member is responsible for hosting the complete application on the local_html server reachable at `.../~[eid]/m1/...`.
- [ ] `.../~[eid]/m1` should redirect to the home page of the site.
- [ ] One member of the group must submit a tar file of the project to Canvas. Tar file structure should be as follows:
  - [ ] Fuel
    - [ ] app
      - [ ] classes
        - [ ] controllers
           - [ ] `your controllers`
        -  model
           - [ ] `your view folders`
      - [ ] views
        - [ ] `your view folders`
  - [ ] local_html
    - [ ] m1
      - [ ] index.php
      - [ ] assets
        - [ ] `any assets used`

### Grading Breakdown
- [x] Home Page as specified, site uses Fuel framework and templates (10 points)
- [x] Member Biographies (10 points)
- [x] Color coordinate page uses GET/POST paradigm (10 points)
- [x] Parameters passed as controller parameters (10 points)
- [x] Parameter Validation (10 points)
- [x] Tables generated as specified (10 points)
- [x] Form controls work and obey selection restrictions (10 points)
- [ ] Print View (10 points)
- [ ] * Site available on team member's local_html at the specified URL (10 points)
- [ ] * Submission of team post-survey (10 points)
  - Survey will be available for a few days starting at the due date of this assignment

Items marked with triple stars (*) are individually graded by student.  Otherwise, the first 8 items will be awarded points to all team members the same.  The notable exception is that team members who did nothing or significantly less work will be penalized, potentially losing all of these points in extreme cases.
