@extends('web.layouts.master')

@section('title', 'Rhythm')

@section('content')
  <div class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-3xl md:text-center px-2">
        <h1 class="mt-4 text-4xl font-bold tracking-tight text-black sm:text-4xl">
            Blue</h1>
        <p class="text-xl mt-1 text-gray-dark tracking-wide">An art show at the Deanne Moore Gallery at Ensembles</>

    </header>
    <section class="markdown-body">
        {!! Str::markdown(<<<'INFO'
## Show Type

Open group

## Show Title

Blue

## Show Dates

Sept 18 - Oct 22, 2023

## Entry fee

A $10 donation is suggested but not required. Donations can be made by check
(made out to Ensembles, 1120 Monroe Street, Charlestown, IN) or through the Ensembles
website at Donate (paypal.com).

## Mediums

Painting, watercolor, printmaking, mixed media, drawing, pastel, encaustic, fiber, and photography.
The Deanne Moore Gallery accepts wall-hung works only.

## Show Statement

BLUE is an exhibition that celebrates works of art that are composed of, convey, share,
or tell the story of Blue.

Since the fourteenth century, the word blue has been used to mean "sad." The noun blues
came into use in the 1700s to describe a state of sadness or melancholy. Around a hundred
years later, a [Black American musical genre](https://www.vocabulary.com/dictionary/blues)
adopted the word to describe its particular twelve-bar chord progression and folksy sound.

Ask any Kindergartener what “blue” means and they will probably tell you,
“It’s the color of the sky!” Yes, it is but it is also the color of the ocean.  In
fact, a multitude of unique shades of blue exist including cyan, navy, aqua, azure,
cobalt and indigo. Like many colors, the human response to blue is complex and contradictory.
It has been said to symbolize serenity, stability, inspiration, or wisdom. And, also, to
represent freedom, intuition, trust, loyalty, and faith. On the other hand, its association
with coldness, loneliness and sadness is undeniable.

As an artist or photographer, how do you utilize blue? Does blue permeate your entire image,
or is it used in small sections? Does it represent sadness or serenity? Does it appear in
your artwork in objects or in nature or in abstract design? Is it purely decorative or is it
a defining device?

## Requirements

- The deadline to submit to this exhibit is August 19th, 2023.
- Entries are limited to a maximum of three (3) and must have been created in the last two years.
- Accepted artwork must be hand delivered and installation ready unless otherwise noted in the acceptance letter.

## Guidelines

- Artworks must be available for loan during the entire exhibition period.
- Our standard for 2D installation is a hanging wire or cleat. NO sawtooth hangers.
- All hanging hardware must be included along with detailed hanging instructions for any non-standard artwork accepted.
- The Deanne Moore Gallery reserves the right to reject accepted work that differs significantly from the submitted images or is inadequately prepared for installation.
- Each artwork must have a label attached on the back or bottom of the pieces containing the following information: Artist’s name, title of piece, media, date of completion, sale price (or if NFS, the insurance value).
- Artist must self-insure artwork for the duration of the loaned period, including the date of arrival at the center through the stated pick-up date.
- The Deanne Moore Gallery suggests a voluntary 10% commission on all sales made because of the exhibition to be made to the Ensembles Center.
- The Deanne Moore Gallery reserves the right to use images of the artworks for educational and promotional purposes including but not limited to newspaper, television, radio, social media, and the Internet.
- Upon acceptance artists may be asked to submit a high-resolution image of the accepted artwork for such purposes.


## Timeline

- Submission Deadline: Aug 19, 2023
- Notification of Acceptance: Sept 1, 2023
- Artwork delivery: Sept 15, 2023
- Show dates: Sept 18- Oct 22, 2023
- Artist Reception: Oct 14, 2023



## Entry Procedure and Digital Image Format

Submit your work by email to Jenny Stopher at jenny@charlestownensembles.com

Include in your email:

- “Blue Show Submission” in the subject line.
- A list of works submitted, including NAME, TITLE OF WORK, MEDIA, DIMENSIONS OF WORK (including frame), DATE OF COMPLETION, and PRICE or NFS (Not for Sale).
- A artist statement of approximately 100 words about your work in general or specific to the work you are submitting.
- Attach digital images of your work. Maximum of 3 digital images for all submissions.
- Please format your image file names as follows: *Last Name*\_*First Name*\_*Title of Work* (can be abbreviated) (Example: Smith_Michael_Spring on the Mt)
INFO) !!}
    </section>
  </div>
@stop()
