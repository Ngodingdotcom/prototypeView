<?php
    class View extends Users
    {
        public function showUser($value)
        {
            $results = $this->getUser($value);


            echo '<!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            id
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Firstname
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Lastname
                          </th>
                          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nickname
                          </th>
                          <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                              <div class="ml-4">
                                <div class="text-lg font-medium text-gray-900">
                                  '. $results[0]['id'] .'
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg text-gray-900">'.$results[0]['first_name'].'</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-lg text-gray-900">'.$results[0]['last_name'].'</div>
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-500">
                          '.$results[0]['nickname'].'
                          </td>
                          <td class="px-6 py-4 whitespace-nowrap text-right text-lg font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                          </td>
                        </tr>
            
                        <!-- More items... -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            '; 
        }

        public function showAll($table_name)
        {
            $results = $this->getAll($table_name);

            $this->showTable($table_name, $results);
    /*



    */
        }

        private function showTable($table_name, $result)
        {
            switch($table_name)
            {
                case "id_security":
                    echo '<table width = "70%" border = "1" cellpadding = "5" cellspacing = "5">
                    <tr>
                        <td>'.'user id'.'</td>
                        <td>'.'username'.'</td>
                        <td>'.'password'.'</td>
                    </tr>';
            
                    foreach($result as $row)
                    {
                        echo '<tr>
                                <td>'.$row['id'].'</td>
                                <td>'.$row['username'].'</td>
                                <td>'.$row['password'].'</td>
                            </tr>';
                    }
                    break;

                    case "identity":
                        foreach($result as $row)
                        {
                            echo '    <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Role
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                    Jane Cooper
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            Admin
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        </tr>
                    
                                        <!-- More items... -->
                                    </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>
                        </div>';
                        }
                        break;

                        case "game_char":
                            echo '<table width = "70%" border = "1" cellpadding = "5" cellspacing = "5">
                            <tr>
                                <td>'.'user id'.'</td>
                                <td>'.'level'.'</td>
                                <td>'.'Progress'.'</td>
                            </tr>';
                    
                            foreach($result as $row)
                            {
                                echo '<tr>
                                        <td>'.$row['id'].'</td>
                                        <td>'.$row['level'].'</td>
                                        <td>'.$row['progress'].'</td>
                                    </tr>';
                            }
                            break;
            }
        }
        
    }
?>