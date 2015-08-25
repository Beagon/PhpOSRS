<?php

/**
 * File: PhpOSRS/lib/PhpOSRS/OSRS.php
 * Author: Robin Rijkeboer <rmrijkeboer@gmail.com>
 */

namespace PhpOSRS;

use PhpOSRS\Account;
use PhpOSRS\Skill;

class OSRS
{

    /**
     * Retrieves the hiscore of the account
     * @param  PhpOSRS\Account $account The account, name must be set
     * @return PhpOSRS\Account          The account with hiscores filled in
     */
    public function retrieveHiscore(Account $account)
    {
        $name = $account->getName();
        if (!$name) {
            throw new \Exception('The name of the account should be set!');
        }

        $skillNames = array(
                        'Total',
                        'Attack',
                        'Defence',
                        'Strength',
                        'Hitpoints',
                        'Ranged',
                        'Prayer',
                        'Magic',
                        'Cooking',
                        'Woodcutting',
                        'Fletching',
                        'Fishing',
                        'Firemaking',
                        'Crafting',
                        'Smithing',
                        'Mining',
                        'Herblore',
                        'Agility',
                        'Thieving',
                        'Slayer',
                        'Farming',
                        'Runecraft',
                        'Hunter',
                        'Construction',
                        );

        //Retrieves the Hiscore in CSV Format from the API
        $hiscoreCSV = $this->getHiscoreCURL($name);

        //Seperates the response per skill
        $seperatedStats = explode("\n", $hiscoreCSV);//str_getcsv($hiscoreCSV, '\n');

        foreach ($seperatedStats as $key => $value) {
            //Skip stats that don't exist (Eg summoning)
            if (!key_exists($key, $skillNames)) {
                continue;
            }

            //Seperates the rank, level and total
            $currentStats = str_getcsv($value);

            //Create a skill object
            $skill = new Skill();

            //Set skill properties
            $skill
                ->setRank($currentStats[0])
                ->setLevel($currentStats[1])
                ->setExperience($currentStats[2])
            ;

            //Add the skill to the account
            eval('$account->set' . $skillNames[$key] . '($skill);');
        }

        //Return the account
        return $account;
    }

    /**
     * getHiscoreCURL sends a request to the OSRS API and returns the response as string
     * @param  string $accountName
     * @return string
     */
    private function getHiscoreCURL($accountName)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://services.runescape.com/m=hiscore_oldschool/index_lite.ws?player=" . $accountName);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //Increase this if you keep getting the exception that the account name seems to be invalid. (and it's not)
        curl_setopt($ch, CURLOPT_TIMEOUT, '1');
        $result = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($status != "200") {
            throw new \Exception('The account name seems to be invalid.');
        }

        return $result;
    }
}
