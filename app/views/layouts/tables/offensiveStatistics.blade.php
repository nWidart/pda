<table class="table statistics table-hover">
    <thead>
        <tr>
            <th>Offensive Statistics</th>
            <th><i class="icon-down-open-1"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>DPS</td>
            <td>{{ round( $heroStats['offensiveStatistics']['dps'], 2 ) }}</td>
        </tr>
        <tr>
            <td>Attacks Per Second</td>
            <td>{{ $heroStats['offensiveStatistics']['attacksPerSecond']['mainHand'] }} MH <br> {{ $heroStats['offensiveStatistics']['attacksPerSecond']['offHand'] }} OH</td>
        </tr>
        <tr>
            <td>+% Attack Speed</td>
            <td>{{ $heroStats['offensiveStatistics']['percentAttackSpeed'] }}%</td>
        </tr>
        <tr>
            <td>Critical Hit Chance</td>
            <td>{{ $heroStats['offensiveStatistics']['criticalHitChance'] }}%</td>
        </tr>
        <tr>
            <td>Critical Hit Damage</td>
            <td>{{ $heroStats['offensiveStatistics']['criticalHitDamage'] }}%</td>
        </tr>
    </tbody>
</table>
