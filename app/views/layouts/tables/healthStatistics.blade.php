<table class="table statistics table-hover">
    <thead>
        <tr>
            <th>Health Statistics</th>
            <th><i class="icon-down-open-1"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Maximum Life</td>
            <td>{{ $heroStats['healthStatistics']['maximumLife'] }}</td>
        </tr>
        <tr>
            <td>Life Steal</td>
            <td>{{ $heroStats['healthStatistics']['lifeSteal'] }}%</td>
        </tr>
        <tr>
            <td>Life Per Hit</td>
            <td>{{ $heroStats['healthStatistics']['lifePerHit'] }}</td>
        </tr>
        <tr>
            <td>Total Life Bonus</td>
            <td>{{ $heroStats['healthStatistics']['totalLifeBonus'] }}%</td>
        </tr>
        <tr>
            <td>Life Per Second</td>
            <td>{{ $heroStats['healthStatistics']['lifePerSecond'] }}</td>
        </tr>
        <tr>
            <td>Life Per Kill</td>
            <td>{{ $heroStats['healthStatistics']['lifePerKill'] }}</td>
        </tr>
        <tr>
            <td>Health Globe Healing Bonus</td>
            <td>{{ $heroStats['healthStatistics']['healthGlobeHealingBonus'] }}</td>
        </tr>
        <tr>
            <td>Bonus to Gold/Globe Radius</td>
            <td>{{ $heroStats['healthStatistics']['bonusGoldGlobeRadius'] }}</td>
        </tr>
    </tbody>
</table>
