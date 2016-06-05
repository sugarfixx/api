<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quotes')->delete();
        DB::table('quotes')->insert(array(
            array(
                'author_id' => 1,
                'quote' =>  "In the course of my life I have often had to eat my words, and I must confess that I have always found it a wholesome diet.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Every man should ask himself each day whether he is not too readily accepting negative solutions.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "It is wonderful what great strides can be made when there is a resolute purpose behind them.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The first duty of the university is to teach wisdom, not a trade, character, not technicalities. We want a lot of engineers in the modern world, but we do not want a world of engineers.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "In finance, everything that is agreeable is unsound and everything that is sound is disagreeable.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "All I can say is that I have taken more out of alcohol than alcohol has taken out of me.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "This is the lesson: never give in, never give in, never, never, never, never — in nothing, great or small, large or petty — never give in except to convictions of honour and good sense. Never yield to force; never yield to the apparently overwhelming might of the enemy."
                ,'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The greatest lesson in life is to know that even fools are right sometimes.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "All the greatest things are simple, and many can be expressed in a single word: freedom; justice; honour; duty; mercy; hope.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The whole history of the world is summed up in the fact that when nations are strong they are not always just, and when they wish to be just, they are often no longer strong.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "I like pigs. Dogs look up to us. Cats look down on us. Pigs treat us as equals.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "If we open a quarrel between the past and the present we shall find that we have lost the future.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "It is a mistake to try to look too far ahead. The chain of destiny can only be grasped one link at a time.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "It’s not enough that we do our best; sometimes we have to do what’s required.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The problems of victory are more agreeable than those of defeat, but they are no less difficult.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "When the eagles are silent, the parrots begin to jabber.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Out of intense complexities, intense simplicities emerge.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Courage is what it takes to stand up and speak, it’s also what it takes to sit down and listen.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Continuous effort – not strength or intelligence – is the key to unlocking our potential.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "If you have an important point to make, don’t try to be subtle or clever. Use a pile driver. Hit the point once. Then come back and hit it again. Then hit it a third time-a tremendous whack.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "It is a good thing for an uneducated man to read books of quotations.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "There are a terrible lot of lies going about the world, and the worst of it is that half of them are true.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "To build may have to be the slow and laborious task of years. To destroy can be the thoughtless act of a single day.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "To improve is to change, so to be perfect is to change often.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The farther backward you can look, the farther forward you are likely to see.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "The price of greatness is responsibility.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Men occasionally stumble over the truth, but most of them pick themselves up and hurry off as if nothing ever happened.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Never hold discussions with the monkey when the organ grinder is in the room.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "One ought never to turn one’s back on a threatened danger and try to run away from it. If you do that, you will double the danger. But if you meet it promptly and without flinching, you will reduce the danger by half.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Personally I’m always ready to learn, although I do not always like being taught.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Success is the ability to go from one failure to another with no loss of enthusiasm.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Broadly speaking short words are best and the old words when short, are best of all.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Courage is rightly esteemed the first of human qualities because it has been said, it is the quality which guarantees all others.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Every day you may make progress. Every step may be fruitful. Yet there will stretch out before you an ever-lengthening, ever-ascending, ever-improving path. You know you will never get to the end of the journey. But this, so far from discouraging, only adds to the joy and glory of the climb.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "History will be kind to me for I intend to write it.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Attitude is a little thing that makes a BIG difference.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Success is not final, failure is not fatal, it is the courage to continue that counts.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "If you’re going through hell, keep going.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Everyone has his day, and some days last longer than others.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "You have enemies? Good. It means you’ve stood up for something, sometime in your life.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Politics is the ability to foretell what is going to happen tomorrow, next week, next month and next year. And to have the ability afterwards to explain why it didn’t happen.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Those who can win a war well can rarely make a good peace, and those who could make a good peace would never have won the war.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "If you will not fight for right when you can easily win without blood shed; if you will not fight when your victory is sure and not too costly; you may come to the moment when you will have to fight with all the odds against you and only a precarious chance of survival. There may even be a worse case. You may have to fight when there is no hope of victory, because it is better to perish than to live as slaves.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "Never, never, never believe any war will be smooth and easy, or that anyone who embarks on the strange voyage can measure the tides and hurricanes he will encounter. The statesman who yields to war fever must realize that once the signal is given, he is no longer the master of policy but the slave of unforeseeable and uncontrollable events.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "We shape our dwellings, and afterwards our dwellings shape us.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "We shall not fail or falter. We shall not weaken or tire. Neither the sudden shock of battle nor the long-drawn trials of vigilance and exertion will wear us down. Give us the tools and we will finish the job.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "What is adequacy? Adequacy is no standard at all.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "There is always much to be said for not attempting more than you can do and for making a certainty of what you try. But this principle, like others in life and war, has it exceptions.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author_id' => 1,
                'quote' =>  "There is only one duty, only one safe course, and that is to try to be right and not to fear to do or say what you believe to be right.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Float like a butterfly, sting like a bee. His hands can't hit what his eyes can't see. Now you see me, now you don't. George thinks he will, but I know he won't.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Service to others is the rent you pay for your room here on earth.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I'm young; I'm handsome; I'm fast. I can't possibly be beat.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Don’t count the days; make the days count.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "If my mind can conceive it, and my heart can believe it—then I can achieve it.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "It's hard to be humble when you're as great as I am.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "It isn’t the mountains ahead to climb that wear you out; it’s the pebble in your shoe.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "If you even dream of beating me you'd better wake up and apologize.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Braggin' is when a person says something and can’t do it. I do what I say.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I am the greatest, I said that even before I knew I was.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Only a man who knows what it is like to be defeated can reach down to the bottom of his soul and come up with the extra ounce of power it takes to win when the match is even.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I'm so mean, I make medicine sick.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I should be a postage stamp. That's the only way I'll ever get licked.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Impossible is just a big word thrown around by small men who find it easier to live in the world they’ve been given than to explore the power they have to change it. Impossible is not a fact. It’s an opinion. Impossible is not a declaration. It’s a dare. Impossible is potential. Impossible is temporary. Impossible is nothing.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "He who is not courageous enough to take risks will accomplish nothing in life.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "A man who views the world the same at 50 as he did at 20 has wasted 30 years of his life.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "If they can make penicillin out of moldy bread, they can sure make something out of you.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I shook up the world. Me! Whee!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I hated every minute of training, but I said, ‘Don’t quit. Suffer now and live the rest of your life as a champion.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "At home I am a nice guy: but I don’t want the world to know. Humble people, I’ve found, don’t get very far.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "A man who has no imagination has no wings.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "He’s (Sonny Liston) too ugly to be the world champ. The world champ should be pretty like me!",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I am the astronaut of boxing. Joe Louis and Dempsey were just jet pilots. I'm in a world of my own.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I’ve wrestled with alligators. I’ve tussled with a whale. I done handcuffed lightning. And throw thunder in jail.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Hating people because of their color is wrong. And it doesn't matter which color does the hating. It's just plain wrong.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "It’s not bragging if you can back it up.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I'm the most recognized and loved man that ever lived cuz there weren't no satellites when Jesus and Moses were around, so people far away in the villages didn't know about them.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "It's just a job. Grass grows, birds fly, waves pound the sand. I beat people up.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "I’m not the greatest, I’m the double greatest.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                ),
            array(
                'author' => 2,
                'quote' =>  "Live everyday as if it were your last because someday you're going to be right.",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                )
            ));
    }
}
