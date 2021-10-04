### Questions

How are you all managing changes with COVID and working from home? Is it possible to work from the office if desired?

What is it like working for a company like id, with a long history and hardcore fan base?

If I get this role, what would my initial work look like as I ramp up with tools and processes?

What is Richardson like?

How do you guys ideate with other departments?

What is the working relationship like with Bethesda/Zenimax?

### Other Games

* Hades
* Resident Evil 8
* Bloodborne
* Dead Cells
* Divinity 2
* Axiom Verge
* Duck Game
* Dota 2
* Valheim

### Other areas of critique

* Use of Buff Totems
* The Dark Lord setup and combat mechanics
* Fodder blending together
* Cacodemon overly hard countere

### Other Demon Ideas

* Behemoth (Orstein and Smough like combo)
    2-demons seemingly combined, split off in combat to fight. When one demon is killed, the other becomes enraged, gaining an
    attack and growing in strength. Both demons are classified as 'heavy'

    Mauler:
        BEHAVIOR:
        Large, slow, cleaver-wielding big boy. Movement speed/accessibility similar to Mancubus, although a bit faster. Has a
        medium ranged fireball, but doesn't use it often. Attempts to close in on the slayer and strike with melee attacks.

        ENRAGED:
        Gains the ability to make deadly leaping strikes at medium distance. Takes 33% damage from weapons. Immune to falter
        and freeze. The Mauler is expected to be much more powerful when Enraged, compared to the Wretch, rewarding the player
        for taking out the tankiner demon first. However, the Wretch poses a bigger threat when not enraged, so there's a balance.

    Wretch
        BEHAVIOR:
        Flying demon. Hit point pool similar to a Revenant, although it has no weak points. Similar movement behavior to a
        Pain Elemental - doesn't attempt to close in too much. Throws flaming spears at the player that explode on impact
        after a about a second. This spear will one-shot the Mauler. The Wretch does lead the player, and the spear flies
        fairly quickly, and can deal high damage.

        Also has melee attacks if the slayer closes in. These attacks are a lunge type strike.

        The Wretch also has the unique ability to slice off a Meathook. He only does this after being hooked for about a second,
        and makes a sound when hooked, indicated the player has hooked a target he doesn't want to. When shattered, the
        Meathook will break and go on a CD 3x longer than normal.

        ENRAGED:
        While the Wretch doesn't take less damage when enraged, he does move quicker and attack more aggressively. His spears,
        in addition to exploding, will erupt into a lake of fire that stays on the ground for a bit.

### Vagrant Analysis

Tethers to heavies in Arena to form a shield, killing heavies ruptures the tether, damaging his shield

* Challenges:
    Tethering:
        This presents the biggest challenge in the design

        The player being aware of the Vagrant being alive is important. Heavy Demons providing a buff that they otherwise
        wouldn't may seem odd, and a new mechanic being applied to another demon. Showing a visual tether, with the energy
        pouring in to the Vagrant would help. There might be some oddities with this clipping through terrain.

        This could lead to a limitation of usage, where it needs to be used in more open arenas. Some options to get around
        this limitation could be having it "travel" around the arena, using some simple pathfinding. This would certainly
        lead to "shifting" - coudl work by it sending projectiles that appear linked. when a new path is found, the projectiles
        start firing in a new path.

        If this becomes difficulty to nail down visually in a way that is communciated to the player, I don't think dropping it
        makes it unsalvageable.

    Turrets:
        Turrets also present a few challenges.

        For one - placing them truly randomly might not work. They may require spawn points, although I think this is avoidable.
        Some logic would have to be in place to put them in a fairly open spot where possible. Because he spawns multiple, a
        specific eye turret "failing" to be useful isn't a big deal.

        It also may be a bit intense to focus on what's going on. Once the lasers are in place - I think it should be pretty clear.
        The initial attack - where they track a player, could be similar in looks and effects to the Tyrant laser tracking and then
        firing, although I don't think should be be difficult to dodge in the same way. It shouldn't try to lead the player. The main
        goal is to create obstacles in places where we know the player would like to travel. It also provides options the player
        to purposefully draw them away.

        I think the lasers doing damage to demons would be pretty fun as well, although it would be an odd mechanic since nothing else
        in the game works quite like this. Still - could be fun! Especially if this was an alternate way to break his shield.

    Screams:
        A new mechanic for the player, along with other new mechanics, could be a lot. I do this is important to their identity, as
        a force that enhances other enemies and requires adapation. I don't think loot-blocking is necessary per se, and I think
        something similar to a speed buff would work well mechanically, but there are a number of buffs that already do this.

        There are a few options here:

        1: The Vagrant could debuff that player with a scream. This would probably be undodgeable, or very difficult to dodge. Maybe
        a homing blast that moves around corners fairly well (like a vore shot?). There are a number of options, from disabling 
        the Equipment Launcher to draining ammo from the selected weapon, to disabling the weapon. I don't like the idea of nerfing
        movement too much, maybe with the exception of the meathook briefly. It COULD provide a random debuff as well, although
        again this would be a lot on top of all the other mechanics the Vagrant already has.

        2: The scream could mimic the screecher buff entirely. This would work well visually with an overlap, and match player
        expectations. Howver, the obvious downside is its just a copy of something already in the game.

        3: The vagrant could increase the defenses of enemies, and possible make weakpoints unbreakable. This could work to spice
        up combat well, although overuse of this would be exhausting, as the fast-paced combat of Doom, where heavies can be taken
        out quickly with high-skilled play, would change. It's also really fun to blast apart weak points. Maybe they could take
        extra hits?

### Demonic Runes

A concept I thought of to add replayability and challenge to Horde Mode, or really any levels in Doom Eternal. These can be toggled
on to increase difficulty, or could occur on certain rounds outside of the player's control. Ideas for Runes:

* Slayer takes constant damage if he hasn't killed a heavy demon in 5 seconds
* Demons can only be killed via GK
* Fodder no longer drops health on death
* Heavy demons become enraged after 10 seconds (totem buff)
* Demons are frozen for 1/3rd the normal time from Ice Bomb
* Demon weak points can no longer be destroyed
* Killing a super heavy buffs all demons in the arena for 10 seconds
* Demons take reduced damage at long range

I feel like whether horde mode is RNG or not, there will be a scoring system, in which case these could act as multipliers. If there's no score, and the rounds are predefined, these could act as 'badges,' so people could * compete to see who can beat it at the highest difficulty.

### Formicide Things

* Idea changes
    * Sniper: originally deployed a shot "gravity" angler. this was cool, and felt fun to setup, but ended up leading to uninteresting
    player behavior on both ends. Despite being a novel mechanic, we felt, we ended up backing up a bit.

* Key Concepts
    Multiplayer, 2d class based

    Class Rules
        * Classes must have unique weapons, at leat 1 ability, and 2 ultimates
        * There should be a central feel to HP and speed, and most classes should slot in there
        * Special classes should break out of this mold
        * Most classes should have abilities/weapons that can aid in their movement
        * All classes should have skills or weapons that are difficult to master
        * Classes should all be viable in 1on1 combat, although some will be better than others

    Weapon Rules
        * Weapons vary in their dependence on the player's ability to aim
        * Weapons that require higher skill to aim should do more damage
        * All weapons should have identifiable silhouettes
        * No weapons should be better or worse versions of any other weapon

    Ability Rules
        * All abilities should be unique

* Ideation for Classes
    Most classes started with weapons that sounded fun to use, and were built around concepts that expanded upon abilties with them.

* Challenges
    Biomite:
        - Unique mechanics: creating destructible dirt dynmically

        This mechanic was difficult to balance in a way that was fun for the Biomite and the player facing him. However, we felt this
        mechanic was important as it was unique to the game.

        This also created an opportunity to balance other classes though - *types* of weapons, such as energy-looking weapons (lasers),
        were weak at getting through it, while explosive weapons were good against it. Certain classes, such as the Hunter, had a rapid
        fire weapon that could dig a narrow line through, but wouldn't provide the ability for teammates to move through it.

        We thought this was a good way to use expectations (explosions removing dirt, lasers not). Plus it gave us a way to figh against
        another potentially frustrating mechanic - turrets! 

        - Development: destructible dirt interaction

        This took a lot of back and forth between the main programmer and myself. I don't know if we fully achieved want we wanted, and
        I do consider this to be one of the drawbacks of the system.

        To create collision with dirt that is simply a giant on/off array, bouncing can be tricky. Level design had to be considered
        with this in mind, and we ended up removing some bouncing projectiles that players had to be concerned with. We had at one point
        considered using a vector-based collision layer, but decided it would be too much work to add, and it wouldn't resolve the issues
        with destructible terrain, which would also require different physics potentially.

        If I had to do this again, I would go with destructible terrain that isn't technically pixel-perfect, but instead uses 'chunks'
        of vectors with defined angles.
    
    Communicating to the Player:
        Overall, reviews were good, but we definitely had back-and-forth communication with the player. The biggest challenges were,
        as expected, players finding mechanics broken and too difficult to overcome. We tried to provide several options to overcome any
        obstacle - for several reasons. We wanted different mechanics to feel good, we wanted multiple options with varying degrees
        of strength, and we wanted to leave things open for players to find new strategies.

        We had no tutorials in the game, so we did our best to use prior expectations of real-world logic, sound cues, and visual
        feedback.

### VAGRANT v2

Main Behavior:
    Spawns in, audio queue, immediately goes in to first phase: teleporting, lobbing projectiles at the player

    Projectiles are slow, arcing, have a fairly impactful AOE, but are relatively easy to dodge. because of their speed, the shots
    don't lead the player too exactly.

    Vagrant is shielded. Unlike before, this is not driven by a tether. He simply takes heavily reduced damage. He can be killed directly,
    although takes reduced damage for awhile. He can receive heavy damage either from interrupting his scream, or damaging a fodder being
    harvested.

    Special attacks:
        Screech:
            Similar to before. Screeches, reduces drops of armor/health. Creates priority for the player to attack and remove the Vagrant,
            although this attack can be interrupted with a flater during his telegraph.

        Harvest:
            Targets a fodder demon. Charges for about 2-3 seconds, then the fodder explodes in a large AOE. Erupting from this explosion
            are 5 "Ticks" - crawling, spider like enemies that can die in a couple hits. These blast out in arcs in a circle. Shortly after
            landing, their legs pop up, and they crawl up a nearby wall, sit still, open an eye on their back, and target the player as
            per the 'eyeballs': track the player for 1 second, pause for 0.5 seconds, fire a slow beam that VERY slowly tracks the player.

            Enemies being harvested take reduced damage, but IF they are killed, they violently rip the tether away from the Vagrant, faltering
            and damaging him through his shield.

### PEOPLE

Peter Sokal     - Lead Design
Pat Hook        - Principal Designer
Alex Whitfield  - Game Systems
James Duggan    - Associate Game Designer

Mark Diaz       - Gameplay Programmer
Kevin Malinak   - AI Programmer
Evan Eubanks    - Gameplay Programmer
Jerry Keehan    - Story
Brandon Souders - Level Designer
Patrick Stone   - Level Designer

Timothy Bell    - Lead Producer
Joel Martin     - Lead Producer
Dave Rose       - Lead UI Artist
Mikey Davila    - UI Artist

Marty Stratton  - Exec Producer
Hugo Martin     - Game Director
 