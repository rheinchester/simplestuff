
# Activities/AEIOU

## About AEIOU

![Aeiou Logo](https://wiki.sugarlabs.org/images/8/8b/AEIOUicon.png)

AEIOU is an activity for introducing the Spanish vowels. It displays letters and images and associated sound files, such as 'A as in ave'. There are four modes:

1. click on the letter to hear its name
1. click on the picture to hear the name of the first letter in the word represented by the picture
1. hear a letter name, then click on the corresponding letter
1. hear a letter name, then click on the corresponding picture



(Also see [I Can Read](https://wiki.sugarlabs.org/go/Activities/Icanread), [I Know My ABCs](https://wiki.sugarlabs.org/go/Activities/IKnowMyABCs), and [https://wiki.sugarlabs.org/go/Activities/LetterMatch](https://wiki.sugarlabs.org/go/Activities/LetterMatch))

## Where to get AEIOU
TheAEIOU activity is available for download from the [Sugar Activity Library](http://activities.sugarlabs.org/): [AEIOU](http://activities.sugarlabs.org/en-US/sugar/addon/4626)

The source code is available [on the Sugar Labs Gitorious server.](http://git.sugarlabs.org/aeiou)

## Using AEIOU

![letter game](http://res.cloudinary.com/dmyow6n0v/image/upload/v1521528024/120px-AEIOU_cidpuw.png)
 **letter game**

![picture game](http://res.cloudinary.com/dmyow6n0v/image/upload/v1521528140/120px-AEIOU2_o5hltp.png)
**picture game**


### **Toolbars**
![letter game](https://wiki.sugarlabs.org/images/b/b0/AEIOUToolbar.png)

#### **Activity toolbar**

&nbsp;&nbsp;  change the activity name; add notes to the Sugar Journal

#### **Letter mode**

&nbsp;&nbsp; listen to letter names

#### **Picture mode**

&nbsp;&nbsp; listen to letter names associated with pictures

#### **Find the letter 1**

&nbsp;&nbsp; hear a letter spoken and then find it

#### **Find the letter 2**

&nbsp;&nbsp; hear a word spoken and then find the first letter

#### **Stop button**

&nbsp;&nbsp; exit the activity

## Learning with AEIOU
While far from contructionist, this activity does provide a mechanism for learning the alphabet.

## Modifying AEIOU
As of Version 1, only a Spanish version is included. In order to add other languages, we need:

*audio recordings of the letter names
*audio recordings of the picture names
*perhaps additional pictures, in order ensure there is a picture for each letter of the alphabet

There is a language-specific database file maintained in ./lessons/??/alphabet.csv where ?? is the 2-digit language code. The format of the CSV file is:

letter | word| color (#RRGGBB)| image file| sound file (image)| sound file (letter)
------------ | -------------| -------------| -------------| -------------| -------------
R | (r)atón| #F08020| raton.png|raton.ogg| r.ogg
