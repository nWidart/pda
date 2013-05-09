<table class="table statistics table-hover">

    <thead>
        <tr>
            <th>Defensive Statistics</th>
            <th><i class="icon-down-open-1"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Armor</td>
            <td>{{ $heroStats['defensiveStatistics']['armor'] }}</td>
        </tr>
        <tr>
            <td>All Resistance</td>
            <td>{{ $heroStats['defensiveStatistics']['resistanceAll'] }}</td>
        </tr>
        <tr>
            <td>Block Chance</td>
            <td>{{ $heroStats['defensiveStatistics']['blockChance'] }}%</td>
        </tr>
        <tr>
            <td>Dodge Chance</td>
            <td>{{ $heroStats['defensiveStatistics']['dodgeChance'] }}%</td>
        </tr>
        <tr>
            <td>Armor Damage Reduction</td>
            <td>{{ $heroStats['defensiveStatistics']['armorDamageReduction'] }}%</td>
        </tr>
        <tr>
            <td>Total Damage Reduction</td>
            <td>{{ $heroStats['defensiveStatistics']['totalDamageReduction'] }}%</td>
        </tr>
        <tr>
            <td>Thorns</td>
            <td>{{ $heroStats['defensiveStatistics']['thorns'] }}</td>
        </tr>
    </tbody>
</table>
