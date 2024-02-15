@extends('plantilla')
@section('contenido')
<div id="dental-chart">
    <table align="center">
      <tbody>
        <tr>
          <td>18</td>
          <td>17</td>
          <td>16</td>
          <td>15</td>
          <td>14</td>
          <td>13</td>
          <td>12</td>
          <td>11</td>
          <td>21</td>
          <td>22</td>
          <td>23</td>
          <td>24</td>
          <td>25</td>
          <td>26</td>
          <td>27</td>
          <td>28</td>
        </tr>
        <tr>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="premolar-4">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="premolar-4">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" transform="scale(1,-1)" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
        </tr>
        <tr>
          <td>48</td>
          <td>47</td>
          <td>46</td>
          <td>45</td>
          <td>44</td>
          <td>43</td>
          <td>42</td>
          <td>41</td>
          <td>31</td>
          <td>32</td>
          <td>33</td>
          <td>34</td>
          <td>35</td>
          <td>36</td>
          <td>37</td>
          <td>38</td>
        </tr>
        <tr>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="incisor">
              <polygon id="top" points="10,0 20,0 20,15 10,15" class="polygon unmarked" />
              <polygon id="left" points="0,10 10,10 10,20 0,20" class="polygon unmarked" />
              <polygon id="bottom" points="10,15 20,15 20,30 10,30" class="polygon unmarked" />
              <polygon id="right" points="20,10 30,10 30,20 20,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="premolar-5">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
          <td>
            <svg width="30" height="50" class="molar">
              <polygon id="top" points="0,0 30,0 20,10 10,10" class="polygon unmarked" />
              <polygon id="left" points="0,0 10,10 10,20 0,30" class="polygon unmarked" />
              <polygon id="bottom" points="0,30 10,20 20,20 30,30" class="polygon unmarked" />
              <polygon id="right" points="30,0 20,10 20,20 30,30" class="polygon unmarked" />
              <polygon id="center" points="10,10, 20,10 20,20 10,20" class="polygon unmarked" />
              <polygon id="root-1" points="0,30, 5,50 10,30" class="polygon unmarked" />
              <polygon id="root-2" points="10,30, 15,50 20,30" class="polygon unmarked" />
              <polygon id="root-3" points="20,30, 25,50 30,30" class="polygon unmarked" />
            </svg>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection