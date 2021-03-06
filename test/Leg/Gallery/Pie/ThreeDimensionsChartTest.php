<?php

/*
 * This file is part of the LegGCharts package.
 *
 * (c) Titouan Galopin <http://titouangalopin.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Leg\GCharts\Tests\Charts\Gallery\Pie;

use Leg\GCharts\Gallery\Pie\ThreeDimensionsChart;
use Leg\GCharts\Tests\TestCase;

class ThreeDimensionsChartTest extends TestCase
{
	public function testBuild()
	{
		$chart = new ThreeDimensionsChart();

		$chart
			->setWidth(200)
			->setHeight(200)
			->setDatas(array(32, 15, 17));

		parse_str(parse_url($chart->build(), PHP_URL_QUERY), $options);

		// Type
		$this->assertArrayHasKey('cht', $options);
		$this->assertEquals('p3', $options['cht']);
	}
}