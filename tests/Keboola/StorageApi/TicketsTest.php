<?php
/**
 *
 * User: Martin Halamíček
 * Date: 16.5.12
 * Time: 11:46
 *
 */

use Keboola\StorageApi\Event;

class Keboola_StorageApi_TicketsTest extends StorageApiTestCase
{

	public function testGenerator()
	{
		$id1 = $this->_client->generateId();
		$this->assertNotEmpty($id1);

		$id2 = $this->_client->generateId();
		$this->assertGreaterThan($id1, $id2);
	}

}